<?php

/**
 * Generate logs by using the following command:
 * git log --pretty='%aI %H' --first-parent master | \                                                           
 *     awk '$1 >= "2022-04-27" { print $2 }' | \
 *     git log --no-walk --stdin --pretty='%cs: %s' --date=short > generated.txt
 * 
 * Remember to update the date on `awk`
 */

if (count($argv) <= 1) die('how to run: php generator.php yyyy-mm-dd');
$date = $argv[1];
$input = "temp";

shell_exec("cd .. && git log --pretty='%aI %H' --first-parent master | \
awk '$1 >= \"". $date ."\" { print $2 }' | \
git log --no-walk --stdin --pretty='%cs: %s' --date=short > inevent-changelog/temp");

if (!file_exists($input)) die('input not found');
$fixedKeywords = ["adjusted", "adjustment", "fixed", "removed", "fix"];
$ignoreKeywords = ["merge branch 'master'", "increased bust"];
$highlightKeywords = [
	"Virtual Lobby", "My Agenda", "My Account", "Agenda"
];

$dates = [];
$output = "";
$handle = fopen($input, "r");
if ($handle) {
	while (($line = fgets($handle)) !== false) {
		$parts = explode(":", $line);
		$date = $parts[0];
		$commit = substr(trim(str_replace($date, "", $line)), 2);
		$skip = false;
		$fix = false;

		// Check if should ignore
		foreach ($ignoreKeywords as $keyword) {
			if (strpos(strtolower(trim($commit)), $keyword) !== false) {
				$skip = true; break;
			}
		}
		
		if ($skip) continue;

		// Check if is fix
		foreach ($fixedKeywords as $keyword) {
			if (strpos(strtolower(trim($commit)), $keyword) !== false) {
				$fix = true; break;
			}
		}

		// Highlight keywords
		foreach ($highlightKeywords as $keyword) {
			$commit = str_replace($keyword, "**$keyword**", $commit);
		}
		
		if (!isset($dates[$date])) {
			$dates[$date] = [
				"added" => [],
				"fixed" => []
			];
		}

		array_push($dates[$date][$fix ? "fixed" : "added"], $commit);
	}

	foreach ($dates as $date => $entries) {
		$humanDate = date_format(date_create($date), "F j, Y");
		$output .= "### $humanDate\n\n";

		if (!empty($entries["added"])) {
			$output .= "#### Added\n";

			foreach ($entries["added"] as $entry) {
				$output .= "- $entry;\n";
			}

			$output .= "\n";
		}

		if (!empty($entries["fixed"])) {
			$output .= "#### Fixed\n";

			foreach ($entries["fixed"] as $entry) {
				$output .= "- $entry;\n";
			}

			$output .= "\n";
		}
	}

	file_put_contents("output", $output);

	unlink($input);
	fclose($handle);
}