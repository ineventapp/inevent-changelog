# InEvent Change Log

This change log was created on January 22, 2021 and only entries after this date will be registered.

## Version 15.7

### July 12, 2021

#### Added
- Added `Fullscreen` with `chat` support when using `Low Latency` mode for **Virtual Lobby**;
- Added option to `bulk update` attendee `permission level` on **Attendees** page;
- Added automatic `push notification` when scheduling a new **Meeting** on Virtual Lobby;
- Added region tracking for events that uses **Custom Domain**;

#### Fixed
- Fixed **UTM Links** when using multiple words on its name;
- Fixed `permission issue` for **Speakers** and **Sponsors** when approving and deleting `comments` and `questions`;
- Fixed small glitch when approving `comments` as admins (only visible to admins) on **Virtual Lobby**;

### July 11, 2021

#### Fixed
- Fixed issue on **Registration Form** when registering with `invite requirement` on;

### July 9, 2021

#### Added
- Added `Welcome` section option to use a `live stream` from a live session on **Virtual Lobby**;
- Improved `name labels` on videos for `Video Conferencing` and `Control Room` modes on **Virtual Lobby**;

#### Fixed
- Fixed issue on `Regional` charts for **Virtual Lobby**;

### July 8, 2021

#### Added
- Added `UTM` support for `iframes` added to **Website** settings;
- Added auto `iframe` resizing when embedding the **Purchase Form**;
- Improved `iframe` resizing for **Website**;

#### Fixed
- Fixed issue with `sponsor` visibility on **Virtual Lobby** (certain places displayed invisible sponsors);
- Fixed issue with `conversions` on **UTM** when coming from anonymous users;
- Fixed **Paypal** payments when using `coupons` with `99%` discount that generated irrational numbers;

### July 7, 2021

#### Added
- **Tokbox** is now the primary `WebRTC` provider;

### July 6, 2021

#### Added
- Added automatic event presence check when opening the **Virtual Lobby**;

#### Fixed
- Added missing `name` field on certain use cases for **Native Websockets**;
- Adjusted **Native Websockets** `ping pong` strategy for better latency;
- Fixed **Email Builder** social icons urls;
- Fixed **Purchase** page when event enrollment is over (it was blank);
- Fixed duplicated `Questions` when changing the **session** room type in real time;
- Fixed **Saros template** css scheme to avoid the usage of `!important` when using **Custom CSS**;

### July 2, 2021

#### Fixed
- Fixed **Salesforce** `Phone` field issue (was not syncing);
- Fixed `Realtime Geo Location` map when lobby is empty;

### July 1, 2021

#### Added
- Added `Region` and better time accuracy for `New login detected` email notifications;

### June 30, 2021

#### Added
- Added **Native Websockets** feature as an alternative to our current `Firebase` setup;
  - This is highly recommended for customers that have attendees in `Mainland China`;
- Added `Region` and better time accuracy for `New login detected` email notifications;

### June 29, 2021

#### Added
- Added `Geo Location` tracking for attendee sessions;
- Added `Geo Location` map for all users and realtime users on **Virtual Lobby** reports page;

#### Fixed
- Fixed **Salesforce** query issue when using `HasOptedOutOfEmail` field enabled;
- Fixed text overflow on `headlines` for **Virtual Lobby**;

### June 28, 2021

#### Added
- Added `Confirm password` field on **Purchase** page;
  - Also added a tool to enable and disable it;
- Added `Tag` filter on **Attendees** page;
- Added improved `attendance` tracking tool for better accuracy on **Virtual Lobby** sessions;

#### Fixed
- Fixed **Website** and **Dashboard** when using `Deutsch` language (`/de` urls);
- Fixed `Chat` text overflow on **Virtual Lobby**;
- Fixed **IVS** (Low Latency) recording removal;

## Version 15.6

### June 25, 2021

#### Fixed
- Fixed **Marketo ID Auth** to only check for event admins when blocking the authentication;

### June 24, 2021

#### Fixed
- Fixed activity list *ical file* for **Schedule** when downloading ical for a specific session;

### June 23, 2021

#### Added
- Added better screen share checks on **Tokbox**;
  
#### Fixed
- Fixed **Marketo ID Auth** names when using *firstName* and *lastName*;

### June 22, 2021

#### Fixed
- Fixed horizontal scrollbar on button controls on **Virtual Lobby**;

### June 21, 2021

#### Added
- Muted `sponsor ads` when using video on **Virtual Lobby**;
- Added documentation for `form completed` on **Google Analytics**;
- Added support for custom static fields on **Marketo**:
  - First Name, Last Name, Role, Company and Telephone;

#### Fixed
- Fixed `delete` on **Files** for **Virtual Lobby**;
- Fixed `IVS` recording delete issue;
- Fixed `translation popup` not showing certain languages (like `English`);
- Fixed `fullscreen` button on `video player` for **Virtual Lobby**;

### June 17, 2021

#### Added
- Added support for invisible sessions on `follow up session` for **Virtual Lobby**;
- Added confirmation box on `follow up session` inside **Schedule** settings page on `Send Now` button;

### June 16, 2021

#### Added
- Added **Audit Logs** for `low latency stream` changes;

#### Fixed
- Removed `Screen Share` button on **Safari** (not supported) on **Virtual Lobby**;
- Fixed issue on `follow up session` action on **Virtual Lobby**;
- Fixed issue that `live streams` could stop when changing settings of other sessions on **Schedule** settings page;
- Fixed **Salesforce** campaign search input;

### June 15, 2021

#### Added
- Added option to split `calendar` .ics file into multiple events (one per activity);
- Added `data-speaker-id` and `data-sponsor-id` HTML tags on **My Agenda**;
- Added `search` on *campaign* selector on **Salesforce**;
- Added `auto-refresh` on activity interactions (Polls, Questions, Comments) on **My Agenda**;
- Added option for admins to enable/disable Polls on **My Agenda**;

#### Fixed
- Fixed new option text input issue on `Safari` for **Polls**;

### June 14, 2021

#### Added
- Added more support for lighter colors on **Company** details;
- Added support for **Tag** visibility (useful for admins that want to create invisible tags for internal usage);

#### Fixed
- Fixed **Registration Form** with `activities` when the event is private;
- Fixed `PDF Buttons` on **Control Room** when sharing a PDF;
- Adjusted extra space added on `Group Rooms` and `Networking` collapsed buttons;
- Fixed **custom link** tabs button on `Virtual Lobby` tabs (it shouldn't allow you to use it);
- Fixed **Issue Report** tool when using `Deutsch` language;

## Version 15.5

### June 11, 2021

#### Added
- Added `chat logs` toggle for *admins* on **Virtual Lobby**;

### June 10, 2021

#### Fixed
- Fixed **API** filter on `company.event.find` that also fixed the **InEvent Rooms** `iPad app`;

### June 9, 2021

#### Added
- Added `region tracking` **API** for Virtual Lobby attendance (a map of attendee regions will be possible in the future);
- Added support for **Notification Messages** on all public pages;

#### Fixed
- Fixed issues on **Virtual Lobby** for old browsers;
- Fixed issues on **My Agenda** for old browsers;
- Fixed issues on **Speaker** modals for old browsers;
- Fixed `online right now` filter for certain events on **Attendees Page**;
- Fixed **Marketo** error logs;
- Fixed **SMS** delivery logs for certain subjects;

### June 8, 2021

#### Added
- Added `Low Latency` stream option for **Control Room**;
- Added custom headings for `Terms of Service` on **Custom Forms** and **Purchase Form** pages;
- Added **Magic Link** follow page for custom links besides `Virtual Lobby` links;
- Optimized **Salesforce** triggers for attendance;

#### Fixed
- Fixed issue on `group rooms` URL link for **Virtual Lobby** when using custom domains;
- Fixed issue that `activity description` would show on **Group Rooms** by mistake;
- Added better `time spent` tracking as a workaround for browsers that block and endup having `30 seconds` as their total `time spent` on **Virtual Lobby**;

### June 7, 2021

#### Added
- Optimized **Virtual Lobby** layout for mobile devices;
- Added `recording types` for **Live Recording** list:
  - `Backstage`: recordings that happen before the live stream starts and after the live stream ends;
  - `Live Stream`: recordings that happen during the live stream;
  - `Audio Interpretation (lang)`: recordings for audio interpretation channels;
- Added `live description` when using `Video Conferencing` mode on **Virtual Lobby** (only for viewers);

#### Fixed
- Fixed issue that `Live Streams` would start automatically when using `Control Room` and `Agora.io` on **Virtual Lobby**;
- Fixed **permission** set for `materials` and `attendee` pages;
- Fixed **hide people count** tool for the new `presenters` and `viewers` counter;
- Fixed **Live Recording** list to avoid collecting failed recordings (either due to absence during the session or low session time - usually a couple of seconds);

### June 3, 2021

#### Added
- Added `polls` on **Person Details** dedicated page;
- Added `livePersonID` key on `live.analyticsGet` **API** endpoint;

#### Fixed
- Fixed issue with `video conversion` on **Live Recording** that would overwrite certain videos (not the source, just the converted);
- Fixed ordering for `Session` reports for **Virtual Lobby Reports**;

### June 2, 2021

#### Added
- Added `watch time spent` column on `live.analyticsGet` **API** endpoint that contails the actual `live stream` watch time for the user;
- Added a `watch time` visual bar on **Virtual Lobby Reports** with actual `live stream` watch time for the user;

#### Fixed
- Fixed `room` states when changing rooms on the left column menu. This issue caused mixed data between sessions going through your browser and you'd get messages from the previous room you were in your current room on **Virtual Lobby**;
- Fixed state issues on **Virtual Lobby Reports** when changing tabs and copying the `URL` link;
- Fixed pagination on `Session` reports for **Virtual Lobby Reports**;
- Removed `interactions` chart from the **Summary** page;

### June 1, 2021

#### Added
- Added support to edit `sponsor details` when being a sponsor host but not added to sponsor people's list;
- Added auto-refresh when `recording` is converted and ready to download on **Schedule** settings;
- Added label count for `Viewers` and `Presenters` in the _people_ tab on **Virtual Lobby**;
- Added support for `bullet points` and `ordered lists` on event `description` in the **Virtual Lobby**;
- Added option to `edit` **Poll** after it is created on **Virtual Lobby**;

#### Fixed
- Fixed layout bug on `Aquila` template for **Website** (calendar dates);
- Fixed layout issue on `Move to next session` button when on `fullscreen` mode on **Virtual Lobby**;
- Fixed event `description` HTML format issue on **Virtual Lobby**;
- Fixed duplicated `group rooms` issue on **Virtual Lobby**;
- Fixed sponsor `bio` HTML format issue on **Virtual Lobby**;
- Fixed issue with `default value` when deleting the option that was defaulted on **Registration Form**;
- Fixed issue that when moving from `pre recorded` content to `Control Room`, the live stream would start automatically on **Virtual Lobby**;

### May 31, 2021

#### Fixed
- Fixed issue on **Marketo** sync when adding more than 300 attendees at a time through spreadsheets;
- Fixed issue with `Presenters` and `Viewers` labels on **Virtual Lobby** when using `group rooms`;
- Fixed layout issue when exiting `fullscreen` by pressing `ESC` and using `gallery mode` on **Virtual Lobby**;

## Version 15.4

### May 27, 2021

#### Added
- Added expanded logs for **Virtual Lobby** timeline chart;

#### Fixed
- Fixed issue with last day of event on **Meetings** popup in the `Virtual Lobby`;

### May 26, 2021

#### Added
- Added auto lag correction tool on **Simulated Lives**;
- Improved `chat` loading when too many messages are sent at the same time or when the session has over 100 chat messages;
- Added lock to allow only a single connection per **Live Translation** console page (per language);
- Added quick filter for `linked speakers` on **Attendee List** page;
- Added quick link to indicate & open `linked speaker` on **Attendee List** page;
- Added `refund policy` option to allow refunds up to 1 day prior to the event;

#### Fixed
- Fixed `lag` issue on **Simulated Lives**;
- Fixed `tag` editing layout on **Schedule** page (was not showing colors);

### May 25, 2021

#### Fixed
- Optimized **Tokbox** layout update changes for missing states;

### May 24, 2021

#### Added
- Added `new page` indicator on dashboard menus that opens in a new page;
- Added `Partner portal` that allows event organizers to find the best partners for their events;

#### Fixed
- Fixed issue on `Focus mixed` layout transition when using **Tokbox** and not screensharing;
- Fixed issue on `social media` buttons on **Email editor**;
- Fixed `Video conferencing PRO` tool to allow up to 17 presenters when enabled;

### May 21, 2021
- Added tip box for **Live Translation** console;

#### Fixed
- Fixed video conversion button for **Live Recordings**;
- Fixed UI bug on `Follow up session` in schedule dashboard;

### May 20, 2021

#### Added
- Added **Audio Interpretation** channels for `Control Room` and `RTMP Streaming`;
  - You can add as many audio channels as you want;
  - You can do chained audio channels (Chinese to English and English to French, Spanish and German);
  - You can add a sign language channel (that would be a video channel);
- Added popup modal when having too many `speakers` and `sponsors` attached to a session that is using the large layout and **Neo Layout**;

#### Fixed
- Fixed issue that videos sometimes showed pitch black on `iPhones`;
- Fixed issue that users could bypass required questions in the UI on **Registration Form**;
- Fixed layout issue on **Schedule** settings when moving users to next session (`follow up session`);

### May 19, 2021

#### Added
- Added option to edit the `polling` data on the backend;

#### Fixed
- Fixed issue on `group rooms` when trying to join;

## Version 15.3

### May 18, 2021

#### Added
- Added dedicated page for `group rooms` on **Virtual Lobby**;
- Added dedicated page for `meetings` on **Virtual Lobby**;
- Added `meetings` tab in session on **Virtual Lobby**;
- Added automatic sync on `speaker` when linking to `attendee`;

#### Fixed
- Fixed `back buttons` on dedicated pages for `sponsors` and `activities` on **Virtual Lobby**;

### May 17, 2021

#### Fixed
- Fixed `speaker` bio formatting on **Virtual Lobby**;
- Fixed issue on `Janus` formatting on **Website**;
- Fixed issue when removing session `room cover` on **Activity** page;
- Fixed typo on `move viewers` popup for **Follow up session** tool;

### May 13, 2021

#### Added
- Added **Follow Up Session** option on **Virtual Lobby**;
- Added deep sync between `attendee` and `speaker`;
- Added option to create `attendee` with `speaker profile` linked automatically;

#### Fixed
- Fixed `fullscreen` button on **Virtual Lobby** video player;
- Fixed `description` edit field on **Event Details** when using dynamic content;
- Fixed issue on `Agora.io` that Video Conferencing sessions when transitioned to Control Room would maintain the `gallery view` layout;

### May 12, 2021

#### Added
- Added track follow for **UTM Tracking** links;

#### Fixed
- Fixed `Live Stream` layout issue on **Tokbox**;
- Fixed multi language issue when loading **website** from a `custom domain`;
- Fixed `heading` issue on **Networking** page;

### May 11, 2021

#### Added
- Added **Low Latency RTMP** endpoint that uses `AWS IVS` as a backbone (twitch.tv);

#### Fixed
- Fixed `chat` opacity animation on **Virtual Lobby**;
- Fixed `Tokbox` Video Conferencing issue with backstage;

## Version 15.2

### May 10, 2021

#### Added
- Added `backstage` functionality on **Virtual Lobby** Control Room sessions;
- Added option to automatically add `converted lead` on an **UTMized** link to a `custom list`;
- Added global **Email Health** page with aggregated data from all events;
- Added **UTM** tracking for pending users on `Purchase Form`;

#### Fixed
- Fixed extra space on Full HD 20+ inches screens for **Virtual Lobby**;
- Fixed **Marketo** sync writes on `custom lists`;
- Fixed empty status issue when syncing users with a **Marketo** program;
- Fixed text overflow when using big headlines on **Virtual Lobby** and **Networking** pages;
- Fixed counting issue on **Virtual Lobby** excel reports;

### May 8, 2021

#### Added
- Upgraded security encryption for `live streams` to use SHA-256 tokens with short expiration dates;

#### Fixed
- Fixed new chat messages sometimes appearing with low opacity;

### May 6, 2021

#### Added
- Added option to hide `People` tab on **Virtual Lobby**;
- Video player `fullscreen` now allows you to interact on **Neo Layout**;
- Added `Online` and `In Session` timeline report for **Virtual Lobby**;
- Added `Reply To` customization for **Emails** on event;
- Added spreadsheet **Report** for Activity files;
- Added spreadsheet **Report** for Activity interactions (polls, questions, feedback, all aggregated);
- Added heading `Form Disclaimer` with Markdown support for **Registration Form**;
- Increased the amount of characters supported for **Speaker** `headline`;
- Improved **Virtual Lobby** description area for sponsor booths on **Classic Layout**;

#### Fixed
- Fixed ordering of **Salesforce** logs;
- Fixed **Report** for Virtual Lobby when extracting a spreadsheet (total time was incorrect);
- Fixed broken `links` on **Emails** when using Outlook (layout would break);

## Version 15.1

### May 5, 2021

#### Added
- Added `Sponsor Categories` on **Virtual Lobby** sponsor dedicated page;
- Added option to randomly sort **Group Rooms**;
- Added `Vimeo` support on **Sponsor Booths**;
- Added **Marketo** Munchkin Tag integration (it's automatic);
- Added `iFrame API` to send analytics data when embedding the **Registration Form**;

#### Fixed
- Fixed issue with **Marketo** program status sync when using a custom program status and also when the email is a duplicate;

### May 4, 2021

#### Added
- Added option to check-off `Questions` during a session on **Virtual Lobby**;
- Added 7 new icons for **Tabs**;
- Added **Marketo** and **Salesforce** `ID Auth` on all event pages;
- Removed `black bars` when sharing your video with **Tokbox**;
- Optimized **Activity** automatic enrollment;

#### Fixed
- Fixed **My Account** edits when `email` was empty;
- Fixed **Tokbox** recording issue on `Video Conferencing` mode (the layout was not updating properly);

### May 3, 2021

#### Added
- Added option to upload **Meetings** spreadsheet using `usernames`;
- Added option to change `social media links` (Facebook, LinkedIn, etc) on **My Account**;
- Added automatic sync on `Activity Delay` function on **Virtual Lobby**;

#### Fixed
- Fixed side menu not loading on **Virtual Lobby** when using `French` language;
- Fixed issue that **Websites** with custom domain didn't follow the event default language (it always defaulted to browser's language);
- Fixed issue with `Speakers` and `Sponsors` heading on **Virtual Lobby** with classic layout;

### May 2, 2021

#### Added
- Added option to download `excel report` of all **Sponsor** material downloads;
- `Add to calendar` button generated from `{{my-agenda}}` **email** dynamic content now opens directly the .ics file;
- Added `audio notification` when you are invited to a call on **Virtual Lobby**;
- Added `(n)` indicator on tab title when not focused and interactions have happened (such as new inbox message) on **Virtual Lobby**;
- Added option to name event when using the **Copy Event** tool;
- Added option to hide `people counter` on session and sponsor booth tiles for **Virtual Lobby**;
- Added `tracking` for our interactions chart when opening the **Virtual Lobby** and also opening a room / session / sponsor booth;
- Added `Tabs` configuration page on **Event Templates**;

#### Fixed
- Fixed issues when changing **Marketo** program name on their dashboard;
- Reorganized certain tools on **Tools** page;

## Version 15.0

### April 30, 2021

#### Added
- Added **Virtual Lobby** `tab` customization with icons, text and translations;
- Added **Salesforce** request log;
- Optimizations on `video sharing` on **Virtual Lobby**;

#### Fixed
- Fixed issue when cropping **Speaker** photos;

### April 29, 2021

#### Added
- Added support for `links` on **Push Notifications**;

#### Fixed
- Fixed issue when removing **Sponsors**;
- Fixed permission profile checks for endpoints that demands enrollment or permission on **API**;

### April 28, 2021

#### Fixed
- Fixed `link changes` on **Virtual Lobby** when creating shortcuts for specific sessions;
- Fixed `room link` on **Admin Dashboard**;

### April 27, 2021

#### Added
- Optimizations on `auto play` bypass popup for **Virtual Lobby**;
- Added `popup` to help users visualize where they need to grant permission to their camera and microphone;
- Removed `permission denied` warning when audio output control is not given (not necessary to work);
- Style adjustments on `select device` popup for **Virtual Lobby**;

## Version 14.9

### April 26, 2021

#### Added
- Optimized `.gif` images upload system wide;
- Added option to export `email blacklist` as **excel**;
- Speakers are now allowed to send chat messages without `approval requirement` on **Virtual Lobby**;
- Added `secure gate` (4-digit code) on **Form** and **Purchase Form** (previously it would only lock you out);

#### Fixed
- Fixed issue when assigning **Tickets** for sponsors;
- Fixed `calendar buttons` not working on **Emails**;
- Fixed **Marketo** unlink account issue;
- Fixed **excel** report for `all comments` download;
- Fixed issue when editing custom fields on **Leads** and **Invites**;
- Fixed double file upload on **Virtual Lobby** when double clicking;

### April 23, 2021

#### Added
- Added API search endpoint for **Marketo** program by ID;
- Added optimizations for `PDF Sharing` on **Virtual Lobby**;

#### Fixed
- Fixed css padding on **Inbox** messages;

### April 22, 2021

#### Added
- Added `announcements` on navbar for admin Dashboard;
- Added `[data-field]` for Speaker and Sponsor fields on **Virtual Lobby** (allows customization via CSS);
- Added column for error line on **Spreadsheet** import result email;
- Added sync between **meeting** management with `concurrent schedule` tool (it allows you to book meetings overlapping activities);
- Added heading for `Confirm` button on **Registration Form**;

#### Fixed
- Fixed `Google Calendar` save to calendar link on **Emails**;
- Fixed issue that authenticated windows would bypass **Marketo ID Auth**;
- Fixed **Recording** removal when using `Tokbox`;

## Version 14.8

### April 21, 2021

#### Added
- Improved contrast color for `hyperlinks`;
- Added popup message for Internet Explorer users when joining without `javascript` enabled;
- Optimized **Virtual Lobby** experience on `iPad`;
- Added global `Download` button for all **charts**;
- Added `dates` for older messages on **Inbox**;
- Added option to hide `Chat` and `Files` from **Sponsor Booths**;

#### Fixed
- Fixed issue with `hyperlink` generation on **Inbox** and **Virtual Lobby** questions;
- Fixed issue that caused certain admins to show up as `presenters` on `pre-recorded` and `simulives`;

### April 20, 2021

#### Added
- Optimized `PDF Sharing` for lower end computers on **Virtual Lobby**;
- Optimized camera access when not using `blur` on **Virtual Lobby**;

#### Fixed
- Fixed `question section` overflow when users with large names ask questions on **Virtual Lobby**;
- Fixed misaligned popup for `layout settings` on **Virtual Lobby**;
- Fixed small css issue on `group rooms` section title;
- Fixed `Ask to meet` button when **Meetings** tool is disabled;

### April 19, 2021

#### Added
- Optimized live change transition when using `Agora.io` on **Virtual Lobby**;
- Added `Join now` popup for users that didn't click anywhere to bypass `autoplay policy` on **Virtual Lobby**;

#### Fixed
- Fixed issue with reverse infinite scroll on **Virtual Lobby** `chat`;
- Fixed issue on `Track Unsubscribes` for **Marketo**;
- Fixed issue that showed wrong `lives` when linked with certain lists on **Virtual Lobby**;
- Fixed icon css style on **Virtual Lobby**;
- Fixed bug that `News Feed` was not loading on **Virtual Lobby**;

### April 16, 2021

#### Fixed
- Fixed issue with + symbols on **Email Creator**;

## Version 14.7

### April 15, 2021

#### Added
- Added option to use the **Purchase Form** with `invite requirement`;
- **Meetings** are now automatically synchronized with **Virtual Lobby** when operating it through the backend;
- Optimized **Meeting** matchmaking;
- Improved error message when activating `polls` without options;
- Improved `speakers` layout on certain layouts for **Website**;
- Added option to customize `Home` label on certain layouts for **Website**;
- Added **Audit Logs** for `activity creation`;

#### Fixed
- Fixed **Custom Form** email trigger issue when using it as a `registration complement form`;
- Fixed broken scrollbar on **Gamification** dashboard;
- Fixed issue that **coupons** with certain characters wouldn't work;
- Fixed issue that when blocking networking, `group rooms` and `networking` tabs were still shown in session on Virtual Lobby when using **Neo Layout**;
- Fixed issue that when blocking networking, `group rooms` would still show up on navbar on **Virtual Lobby**;
- Fixed `send now` and `schedule` buttons on **Push Notifications** dashboard;
- Fixed issue that `iPhone` users couldn't send chat messages during the session on **Virtual Lobby**;

### April 14, 2021

#### Added
- Added `Marketo ID Auth` email option;
- Added option to disable `unsubscribed tracking` on **Marketo**;
- Added `invisible` tag on invisible activities for admins on **Virtual Lobby**;

#### Fixed
- Fixed errors when opening certain pages as admin but not enrolled at event:
  - `My App`;
  - `My Forms`;
  - `Purchase`;
- Improved button sizes for **Virtual Lobby** Control Room when using small devices;

### April 13, 2021

#### Added
- Added `Marketo ID Auth` option for quick authentication between **Marketo** and **InEvent**;
- Optimized **Virtual Lobby** chat scroll, new messages and fixed layout issues;

### April 12, 2021

#### Added
- Event URLs are now released after deleting the event;
- Added result information of matchmaking on **Meetings**;
- Optimized mass removal of **Attendees**;
- Added support for `Daily.co` iframes;
- Added option to delete `Files` directly in the **Virtual Lobby**;

#### Fixed
- Fixed `tag` heading on **Purchase Form**;

### April 8, 2021

#### Added
- Added missing `FAQ` link for the **Link Tracking** tool;

#### Fixed
- Fixed issue that blocked **Custom Domains** that had `inevent` as a prefix;
- Fixed billing payment when price has not been set yet for your company;

### April 7, 2021

#### Added
- Added option to download **Custom Reports** widgets:
  - `Table` widgets are downloaded as spreadsheets;
  - `Graphic` widgets are downloaded as pictures;
- Added option to filter by template on **Custom Reports**;

### April 6, 2021

#### Added
- Added `password` column on **Speaker** spreadsheet to be used when `link attendee` is enabled;
- Added missing integration for `Material` tool on **Virtual Lobby**;
- Added new `realtime` updates for **Virtual Lobby** when editing session details:
  - Activity description;
  - Activity feedback popup when leaving;
  - Activity right-column menus (chats, questions, polls, files);
- Added new `heading` options:
  - My Agenda:
    - `Save to calendar` button;
    - `Send feedback` button;
  - My Account:
    - `My profile` section button;
    - `Sponsor profile` section button;
  - Virtual Lobby:
    - `Type your text` input placeholder;
    - `Device configuration` popup title;
    - Device configuration `Join now` button;
    - Device configuration `Join as viewer` button;
    - `Live content changed` popup title;
  - Header section (on My Account, My Agenda, etc):
    - `Open lobby` button;

#### Fixed
- Fixed issue that caused audio to be duplicated when sharing `PDF` on **Virtual Lobby**;
- Fixed issue that disabled audio of shared video when the person sharing muted their mic on **Virtual Lobby**;
- Fixed reattach issue when moving to a regular session to an `external link` session type on **Virtual Lobby**;
- Fixed **Marketo** status updates for leads that were pulled directly from a `Program`;
- Fixed broken interaction between `realtime` session changes when changing room type and feedback popup was enabled;

### April 5, 2021

#### Added
- Optimized `PDF` and `Video` loading for content share on **Virtual Lobby**;
- Added tool to disable custom `content share` on **Virtual Lobby**;

#### Fixed
- Fixed issue with specific links when sending **Emails**;
- Fixed `realtime content change` on **Virtual Lobby** when moving to `external link`;
- Fixed mass operations on **Leads**;

## Version 14.6

### April 2, 2021

#### Added
- Added `rate your experience` popup feedback form when leaving a session on **Virtual Lobby**;
- Added `PDF and Video` content sharing on **Virtual Lobby** session;
- Added `reverse scroll` to load previous chats on **Virtual Lobby**;
- Added `pre-recorded content toggle` for sponsor booths on **Classic Layout**;
- Added option to delete files directly in the **Virtual Lobby** session;
- Added optimization for page loading;

#### Fixed
- Fixed `Holmes` template CSS buttons;
- Fixed **Paypal** SDK integration;

### March 31, 2021

#### Added
- Added `API Limit` setting for **Marketo** with logs of API Requests per day;
- Optimized **Virtual Lobby** for mobile devices;

#### Fixed
- Fixed `current date` when joining **Virtual Lobby** for + timezones;

## Version 14.5

### March 29, 2021

#### Added
- Added button to `cancel` **Meeting** after creating it on **Virtual Lobby**;
- Added permission for all sponsors to add files directly in their **Virtual Lobby** booth;
- Added `alert` icon for new questions on **Virtual Lobby**;
- Added dedicated daemonized processes for `Salesforce`, `Marketo`, `News Feed` and `Activity operations`;

#### Fixed
- Fixed issue on editing certain custom fields on **Attendees** page;
- Fixed issue that admins couldn't see **Sponsor** description when invisible;
- Fixed social media links on **Website**;
- Fixed small error on **Purchase Form** when submitting without `Address Line 2`;

### March 26, 2021

#### Added
- Added daemonized processes on **Audit Reports**;
- Added `applicants` and `tickets` operations on **Audit Reports**;

#### Fixed
- Fixed `cropping` issue caused due to new CDN;
- Fixed **Registration Form** loading issue on certain custom domains;

### March 25, 2021

#### Added
- Added option to automatically create or `link attendee` when **importing speakers**;
- Added option to notify automatic email when **importing speakers** with `linked attendee`;
- Added option to automatically link session when **importing speakers**;
- Added option to automatically add `tags` when **importing speakers**;
- Added option to `copy magic link` to clipboard on **attendees list**;
- Added `tags` on **virtual lobby** *excel reports*;
- Added custom fields on **virtual lobby** *excel reports*;
- Added better **virtual analytics** reading experience on *excel* (hh:mm:ss times instead of seconds);
- Added option to select `permission` level of user on right popup on **attendees list**;
- Increased `files` amount to 100 on **Virtual Lobby**;

### March 24, 2021

#### Added
- Added **Intercom** integration for the **Virtual Lobby** (add your own Intercom chat support);
- Added auto detect `iframe` embed on **Registration Form** to open links on new tabs;
- Added section to embed the **Registration Form** in your **Website**;
- Added `badge counter` for unread messages on **Inbox** chat when loading the page;

#### Fixed
- Added error message when **Stripe** API Keys are expired;
- Fixed **Meeting** calendar link;
- Fixed **custom domain** issue that redirected users incorrectly when authenticated and using company level domains;
- Fixed **Meeting** slot creation on admin dashboard;

### March 23, 2021

#### Added
- Added `cdn.inevent.com` proxy relay for edge caching and better latency;

#### Fixed
- Fixed **Meeting Form** page loading issue;
- Fixed **Salesforce** sync for blacklisted users;
- Fixed minor issue on `event.person.find` endpoint when using an Array `query` content;
- Fixed issue when removing **Forms** that have tickets associated to;
- Fixed `comment.find` query for certain filters;

## Version 14.4

### March 22, 2021

#### Added
- Added support for instant `control room` and `on demand` changes for **sponsor booths**;
- Added `bulk operation` origin on **Attendee** list;
- Improved **Audit Logs** reporting;

#### Fixed
- Fixed `online virtual now` filter on **Attendee** list;
- Fixed **email** layout issues on Outlook;
- Fixed **sponsor bio** translation issue;
- Fixed `bulk operation` when filtering a custom list and selecting all;

### March 18, 2021

#### Fixed
- Remove `middleName` variable on **Marketo** connector;
- Fixed event cover crop issue on **My Account** & other pages;
- Fixed issue while loading **landing page** on company level;
- Fixed **Tokbox** minor css issue;

## Version 14.4

### March 17, 2021

#### Added
- Added `Video connection is unstable` label when video is disabled on **WebRTC** due to bad internet connection;
- Added `muted` icon indicator next to name label on **WebRTC** videos;
- Added `ticket` setting tool on **Registration Form** settings page;
- Integrated `phone block` tool on **Purchase Form**;

#### Fixed
- Removed **Control Room** label after presenter joins the session;
- Removed **Waiting for broadcast** label that remained even when broadcast started for **Video Conferencing** on **Tokbox**;
- Fixed **ticket** remove issue when assigning tickets to sponsors;
- **Stripe** ticket `SKU` is now reset when moving from _test_ to _prod_ accounts. This fixes the 'mismatch environment' error message;
 
### March 16, 2021

#### Added
- Added persistent chat messages for **Sponsor Booths**;
- Added option to select `Contact` and `Lead` specific fields on **Salesforce** connector;

#### Fixed
- Fixed broadcast stop issues on **Agora.io**;
- Fixed **activity feedback form** redirect issue;

### March 15, 2021

#### Fixed
- Fixed **News Feed** toggle button on top bar;

### March 12, 2021

#### Added
- Added **Link Tracking** feature to track `clicks` and `conversions` from any url;
- Added pre-recorded **iframe** `camera` and `microphone` policy;
- Added **News Feed** popup on top bar (works during sessions too);
- When removing a person from an activity, it now kicks them out of the session if they are watching;

#### Fixed
- Fixed issue on **Salesforce** custom fields that ignored values on `plain text` fields;
- Fixed **Virtual Lobby** css issues:
  - Tag search didn't have a scrollbar;
  - Bottom menu overlapped the chat text field on mobile devices;
  - Group rooms didn't have a scrollbar on fullscreen;
- Fixed **meetings** section when users you are meeting are removed from the event;
- Fixed telephone country area code when not given (`+1 US` is now used by default);
- Fixed error on **Virtual Lobby** analytics when viewing it in French;
- Fixed **Tokbox** mic audio slider on device preview (it was not working);
- Fixed mic selector on device preview;

## Version 14.3

### March 11, 2021

#### Added
- Added option to set a default value on any **form** (also on custom fields);

#### Fixed
- Fixed **Marketo** custom fields and attendees that were added before adding the integration;

### March 10, 2021

#### Added
- Added support for **Transcription** when using **RTMP** directly;

### March 9, 2021

#### Added
- Added automated **recording** retrieval for Endpoint B;
- Optimized **Marketo** integration and added option to sync programs manually;

#### Fixed
- Fixed **Tokbox** failover stream;
- Added **transcription** support for all RTMP endpoints;
- Fixed email tag when calculating the bounce rate;

### March 8, 2021

#### Added
- Added permission for **sponsor** people manage presenters / viewers on sponsor booths;
- Optimized **excel import** for larger files and added better error logs;
- Added option to delete old **push messages**;

#### Fixed
- Fixed admin dashboard form submissions layout;
- Fixed issues when viewing plain text fields with large content;
- Fixed visibility issue for private users on **Virtual Lobby**;
- Fixed social media handle for **websites**;
- Fixed **Test your connection** last step when using Tokbox;
- Fixed invoice generation due date;

### March 5, 2021

#### Added
- Added **Background Blur** option for your video;
- Added **1 hour before** option on session join policy;
- Added `telephone` column on **waitlis** import spreadsheet;

#### Fixed
- Fixed **Salesforce** custom field picklist integration;

### March 4, 2021

#### Added
- Added option to select default stream layout for **Control Room**;
- Added option to upload an image for the stream player when idle;

## Version 14.2

### March 4, 2021

#### Added
- Added **URL** support on Inbox chat and push notifications;
- Added instant messaging for chat messages sent from our **mobile app**;
- Added **invite** button to invite users to join your session instead of creating another one when inviting them;
- Added bulk import **tickets**;
- Added option to display sponsor booths randomly on **Virtual Lobby**;

### March 3, 2021

#### Fixed
- Fixed duplicate form submissions when changing results;

### March 2, 2021

#### Added
- Added **tags** on activity report excel spreadsheet;
- Added **placeholders** for:
  - Ticket manager `buy` button;
  - Purchase form `invoice subtitle` label;
  - Top bar `inbox` button;
  - Virtual Lobby `welcome` label;
  - Virtual Lobby `read more` button;
  - Registration form `privacy` field subtitle;

#### Fixed
- Fixed **Sponsor** list order inside sessions;

### March 1, 2021

#### Added
- Added **Automatic Layout** option for Control Room;
- Added alert popup when changing pinned stream if screen sharing on **Tokbox**;
- Added better indicator for **pinned** streams;
- Added **Salesforce** Campaign Member Status integration;
- Added extra sponsor details on **Virtual Lobby** sponsor booths;
- Added option to translate **Sponsor** bio;
- Improved **Virtual Lobby** page view on iOS devices;
- Improved **Tokbox** Screen Share resolution;

#### Fixed
- Fixed CSS on **Attendees** page for smaller screens (menu bar buttons);
- Fixed calendar link on emails;
- Fixed backslashes showing up on certain lobby session titles;
- Fixed stretched images on **meetings** popup;
- Fixed **Test your connection** tool to work with Tokbox as well;
  
### February 28, 2021

#### Added
- Added class filter for sponsor booth pagination on **Virtual Lobby**;

### February 26, 2021

#### Added
- Added tag search for **Sponsors Booths** on **Virtual Lobby** Neo Layout;

#### Fixed
- Fixed **Meeting** tile on responsive view of **Virtual Lobby**;
- Fixed ticket sync issues with **Waitlists**;

### February 25, 2021

#### Fixed
- Fixed **Agora.io** auto pin when host is talking;

## Version 14.1

### February 24, 2021

#### Fixed
- Fixed info displayed on **Schedule** settings when using **WebRTC** (Video Conferencing);
- Fixed **Files** tab on Virtual Lobby when using large names;

### February 23, 2021

#### Fixed
- Fixed **Salesforce** Yes/No custom field integration;
- Fixed **Salesforce** last modified date check for list imports;

### February 22, 2021

#### Added
- Removed `RequestedAuthnContext` requirement on **SSO** integration;
- **Tokbox** control room recordings are now exactly like the Live Streaming layout;

#### Fixed
- Fixed **Salesforce** lead import on invitees list;
- Fixed issue that session hosts had to be admins to work well on **Tokbox**;
- **Website** rebuild now works when adding content via spreadsheets;
- Fixed **Custom Report** dates (it was showing the previous day);

### February 19, 2021

#### Added
- Added option to click on `Live` button to seek to current live state on **Simulated Lives**;
- Added check mechanism to avoid users bypassing the simulated live and manipulate timestamps manually;

### February 18, 2021

#### Added
- Added iframe parameter to hide top bar on **Custom Form**;
- Added iframe parameter to hide cover image on **Custom Form**;
- Added **Landing Pages** custom HTML for event root domain (`js` code is disabled for this use case);
  
### February 17, 2021

#### Added
- Added **Salesforce** campaign status sync with InEvent;
- Optimized all **Salesforce** requests on native integration;
- Optimized event creation function;
- **Tokbox** live stream now resumes without downtime if the host crashes;

#### Fixed
- Fixed error that host would never get its video pinned when talking on **Tokbox**;
- Fixed *ghost* video that would get focused all the time when someone left the call with high audio volume on **Tokbox**;

### February 16, 2021

#### Added
- Speakers are now ordered by position on your session on **Virtual Lobby**;
- Added response date for custom fields on **excel** export for **attendees**;
- Optimized PayPal webhook calls;
- Added tooltip on **Virtual Lobby** session buttons;

#### Fixed
- When not using **usernames**, the **email** field will not allow edits on **My Account**;
- Fixed word breaking on **Questions** tab on **Virtual Lobby**;
- Deactivated password block on company level login;
- Fixed css overflow issue on **Classic** layout;

### February 15, 2021

#### Fixed
- Fixed **custom list** import using **Salesforce** integration;
- Fixed role and company fields on **Salesforce** import of campaign members;

### February 13, 2021

#### Fixed
- Fixed event create function that failed when not using a template;
- Optimized **Salesforce** amount of API calls necessary to import and export leads;

## Version 14.0

### February 12, 2021

#### Added
- Added access policy for sessions on **Virtual Lobby**;
- Extended access policy to event level;
- **News Feed** added source icon (Twitter, Instagram, etc);
- **News Feed** added source handle (@ineventapp, InEvent, etc);
- **News Feed** added link to open the original post on Twitter, Instagram, etc;

#### Fixed
- Fixed admin and host controls on live session;
- Fixed ghost messages on **News Feed** that stick even when you delete them on the backend;
- The date and time of the post works like magic (same way as twitter does it);

### February 11, 2021

#### Added
- Added **SSO** integration to be used with regular attendees;
- Added tool to allow / block logins without **SSO** when having it integrated;
- Added domain whitelist for **SSO** with DNS record check;

#### Fixed
- Fixed rotating streams on **Tokbox** space between layout on **Control Room**;

### February 10, 2021

#### Fixed
- Optimized **Meeting** selector modal for events with months of duration;
- Fixed **Meeting** button showing up when tool is disabled (Networking page);

### February 9, 2021

#### Added
- Added action popup to hosts when leaving a session while streaming;

#### Fixed
- Fixed **Salesforce** [2,000 offset cap](https://developer.salesforce.com/forums/?id=906F0000000DDCyIAO) by using `WHERE` clauses;
- Fixed **Tokbox** screenshare issue that triggered "Oh snap" messages;
- Fixed **Tokbox** live streaming layout for 5 and 6 people on "Space Between" format;

## Version 13.9

### February 8, 2021

#### Added
- Added self **Meeting** schedule feature on **Virtual Lobby**

#### Fixed
- Fixed **Virtual Lobby** placeholders when using single quotes;
- Fixed **Screen Share** issues on **Virtual Lobby** for **Tokbox** provider;
- Fixed live stream layout issue on **Virtual Lobby** for **Tokbox** provider;
- Fixed **ticket** amount check on purchase form page;
- Invite check fix on **registration form**;
- Fixed session authentication when lists are attached and user has Speaker permission;

### February 5, 2021

#### Added
- Added optimizations for DOM rendering on People and Chat tabs (useful for large events > 10,000 people);
- Added search option for Presenters and Viewers on **Neo Layout**;

### February 3, 2021

#### Added
- Added automatic tile visibility on **Virtual Lobby** (visibility changes will reflect automatically);
- Added YouTube link parser on **Virtual Lobby** sponsor booth;

### February 2, 2021

#### Added
- Added option to automatically regenerate **website** when changes are made;
- Added **Salesforce** settings sync for event templates;
- Added question approval permission to hosts of sessions on **Virtual Lobby**;
- Added **magic link** only recovery for events without passwords;

#### Fixed
- Fixed CSS alignment on **Janus** template;

### January 29, 2021

#### Added
- Added option to listen to hash changes on **Virtual Lobby** (links for other sessions will work now);
- Users are now allowed join invisible sessions if enrolled (by link);

#### Fixed
- Added clear on presenter list when changing rooms **Virtual Lobby**;
- Removed ghost "left" and "joined" messages for admins on **Virtual Lobby** chat;
- General layout fixes on **Neo** layout and **Classic** layout

### January 28, 2021

#### Added
- Added Networking and Group Room modals on **Classic** layout;
- Added option to view **poll** results without needing to vote as admin;

#### Fixed
- Fixed modal sizes on **Classic** layout;
- Fixed flow issue when opening a group room from search modal;

## Version 13.8

### January 28, 2021

#### Fixed
- Fixed chat / questions / attendees disappearing during a session when hiccups occur on your connection;
- Fixed presenters disappearing from the list during a session when hiccups occur on your connection (and their connection);
- Adjusted Tokbox and Agora.io layouts for viewers, presenters, fullscreen mode, Neo Layout and Classic layout;
- Adjusted Tokbox video overlap with profile picture on certain scenarios;

### January 27, 2021

#### Added
- Added option to ask technical questions on our **Issue Report** tool;
- Added **camera** and **microphone** permission on `allow` attribute for the `iframe` on custom tabs;
- Added support for **magic link** retrieval form on **custom domains**;

#### Fixed
- Fixed **My Agenda** activities not showing up when using custom lists;
- Fixed **billing** calculator when purchasing credits (sometimes it failed);

### January 26, 2021

#### Fixed
- Fixed **socket** connection issues when using multiple tabs;
- Optimized accuracy of keep alive cronjob for better **analytics** data;

### January 25, 2021

#### Fixed
- Fixed Notifications endpoint to avoid ghost users on **Virtual Lobby**;
- Fixed **Send Now** notification button on push notification screen;
- Fixed **Back** button on **My Agenda** page;
- Fixed permission to download **recordings** on Europe region;
- Fixed collapse networking tool when sponsors are disabled;
- Fixed admin email notification that was using environment's language instead of company's language to generate its content;

### January 24, 2021

#### Fixed
- Fixed chat input field misposition on **Virtual Lobby** classic layout;
- Fixed **registration form** **analytics** field names on pie charts and bar charts;
- Fixed fullscreen layout for Gallery and Speaker view on **Virtual Lobby** Neo layout;
- Fixed device settings popup on fullscreen;
- Fixed clickbox on left and right menus buttons **Virtual Lobby** Neo layout;
- Fixed wrong rounded edges on right menu **Virtual Lobby** Neo layout;

### January 22, 2021

#### Added
- Added visual identification showing how to enable your camera and mic for **Tokbox** (previously only on Agora);
- Added Vimeo and YouTube url parsing on sponsor edit popup on **Virtual Lobby**;
- Added more layout updates to avoid having the networking section smaller than it should be;
- Upgrade Firebase version;

#### Fixed
- Fixed wrong bounce identification for invalid "from" addresses;
- Fixed auto live update on **Virtual Lobby**, now we ignore old changes and only listen to new changes;
- Fixed emoji popup cutoff;
- Fixed mux logs, we will soon have a way to control hours of stream per account;
- Fixed web notification for unsupported devices (Safari on older iOS);
- Fixed **Tokbox** recording failed message even though the recording started successfully;