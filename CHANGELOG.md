# InEvent Change Log

This change log was created on January 22, 2021 and only entries after this date will be registered.

## Version 16.1

### December 8, 2021

#### Added
- Changed `Control Room` button name to `Live Studio` when using **Live Studio** video mode;

#### Fixed
- Fixed **Live Studio** `streams` tab glitch when 4 or more streams are enabled and the scroll bar goes on and off;

### December 7, 2021

#### Fixed
- Fixed events with long names exceeding **Website** navigation bar size;

### December 6, 2021

#### Added
- **Meetings** now respect user local `timezone` when scheduling through the **Virtual Lobby**;
- Added `Full Screen` option on **Live Studio** for speaker view mode;

#### Fixed
- Optimized `stream reconnect` for unstable connections on **Virtual Lobby**;
- Fixed `question` voting flickering issue when questions order rearrange on **Virtual Lobby**;

### December 3, 2021

#### Added
- `Virtual Backgrounds` custom background settings is now available for all accounts;

### December 2, 2021

#### Added
- Added `Event Full Report` on **Event Details** dashboard page. This report contains all sessions your users visited, all sponsors they visited, all comments they sent, all questions they made, all polls they answered and all files they downloaded;
- Added auto publishing of `screen share`, `PDF share` and `Video share` on **Live Studio** when streaming has started;
- Added better camera switcher when switching cameras during the session -- it will now be fast and not cause a brief disconnection -- on **Virtual Lobby**;
- Added automatic device fallback for `Camera` and `Microphone` when the one in use disconnects. When reconnecting the previous device, it will be switched back to the previous state.

### December 1, 2021

#### Added
- Added option to customize `company logo` on **Live Studio** per event. The default logo is the one you have in your company settings. This option allows you to change it. This option is available on **Virtual Lobby Settings page**;
- Added option to upload custom `Virtual Background` images for **Virtual Lobby** speakers. This option is available on **Virtual Lobby Settings page**;

### November 30, 2021

#### Added
- On **Live Studio**, when the stream has already started, speakers will join on `backstage` by default to avoid unexpected layout changes of your stream;
- Added `muted` indicator for muted users on **Live Studio** (similar to `Control Room`);
- Added `Apply` buttons on `Lower Third` and `Chyrons` to allow you to create new content on the fly and only apply when it's ready on **Live Studio**;
- Added `Big Emojis` on **Virtual Lobby** chat, and emojis are now the exact ones you see in the emoji popup window;
- Added option to customize `Rate your experience` popup with a custom external link on **Virtual Lobby** session feedback;
- Added `Retention rate` on **Virtual Lobby Reports** -- we measure all users that watched over 70% of the session;

#### Fixed
- Fixed `Whisper` function on **Live Studio**. Previously it would work backwards if you started whispering and changed your microphone settings;
- Fixed `Chyron` location when resizing your screen for **Live Studio**;
- Fixed `Lower Third` showing up (parts of) when not enabled and using multi-line text on **Live Studio**;

### November 21, 2021

#### Added
- Added `Session Replica` option on **Virtual Lobby** that allows you to create replicas of your main session:
  - Main use case: `RTMP Streaming` to stream the same video across multiple sessions using a single stream key.
  - Also useful for other stream types, like `Live Studio` and `Control Room`;

#### Fixed
- Fixed **Virtual Background** logo cutting-off on 4:3 videos when using your company virtual background;

### November 19, 2021

#### Added
- Added dedicated `IP Whitelist` for `WebRTC` video on **Virtual Lobby** for Enterprise;
- Added better separation between `company` **Users** and **Booking Users**;

### November 18, 2021

#### Fixed
- Improved video quality of `Video standalone feed` page on **Virtual Lobby**;
- Fixed **Event Booking Form** issue that submissions from event templates with custom forms wouldn't show up;

### November 17, 2021

#### Added
- Added `High-fidelity audio (HD)` option for professional audio inputs on **Virtual Lobby**:
  - This option will disable any audio processing features and will output high quality `256kbps` audio;
  - If you don't have a professional audio input or you are on a loud environment, we recommend keeping it disabled;
  - This feature is essential when live streaming music content;

#### Fixed
- Fixed issue with `Multi Camera` state when switching between stream and settings tabs on **Live Studio**;

## Version 16.0

### November 16, 2021

#### Added
- Added `Automatic Layout` on **Live Studio** with option to select the layout for `Content Share` and `Only Cameras`;
- Added `Multi Camera` support on **Live Studio** with option to quick switch between cameras using your mouse and using the following keys:
  - `Arrow Up` or `Page Up`: move backwards;
  - `Arrow Down` or `Page Down`: move forwards;
  - `PPT Clickers` are supported;
- When removing activities that are live, users are now ejected back to the **Virtual Lobby**;

#### Fixed
- Fixed `emojis` not being saved on `Lower Thirds` and `Chyrons` when creating presets on **Live Studio**;
- Added limited connection mode on `Firebase Websockets` in case there's an outage on **Google's Firebase Servers**;
- Fixed issues on `Push Notifications` that blank notifications would pop up on **Virtual Lobby**;
- Optimized `session chat` on **Virtual Lobby** when a lot of chat messages are being sent at the same time;

### November 15, 2021

#### Fixed
- Fixed **Whisper** function issue that would be backwards when `whispering`, `added to stage` and `added to backstage`;

### November 14, 2021

#### Added
- Added option to `resend` emails on **Email Builder** that have already been sent:
  - Useful for `lists` and `attendees` that are added to your email segmentation after the emails was sent;

### November 12, 2021

#### Fixed
- Fixed email lists that stopped while being sent due to internal issues;
- Fixed `presenters` showing up on `Pre Recorded` content on **Virtual Lobby**;

### November 10, 2021

#### Added
- Added option to view `presets` on **Live Studio** for non-admin users that are hosts of sessions;
- Improved `name label` readability on **Live Studio** streams when white backgrounds is used;
- Added `background video` audio toggle for **Live Studio** -- you can now have a background music on your `live stream`;
- Added audio `auto mute` when moved to the backstage of **Live Studio**;
- Added **Whisper** functionality on the backstage of **Live Studio** -- you can now enable your mic while on backstage and you'll only be heard by people on `control room`, your audio will not go through the `live stream`;
- Added option `Test Microphone` on `Device Configuration` popup to test if your audio is going through on **Virtual Lobby**;

#### Fixed
- Fixed `presenters` not showing up on `People` tab on **Virtual Lobby** sessions;

### November 9, 2021

#### Added
- Added `Video Clean Feed` button on backstage of **Live Studio** sessions;

#### Fixed
- Fixed **PayPal** expiration date issue;

### November 8, 2021

#### Added
- Added a new user interface on **Virtual Lobby** `Settings Page` with separated sections;

### November 5, 2021

#### Fixed
- Fixed error on **Schedule** page that would display when you have `Materials` disabled;
- Fixed `backstage audio` being audible on **Live Studio** final `stream`;
- Fixed **External URL** rules when opening it (a popup will now be displayed);

### November 4, 2021

#### Added
- Optimized **Firebase Websockets** option to load less data -- highly improved specially for large events:
  - We also added several other optimizations that will make everything faster;
  - We had to remove the infinite listing on **Virtual Lobby** `Networking` section -- you now must open the `search` popup and filter through there;
  - We also added a button `Load More` on **Virtual Lobby** Session Viewers menu;
- Added option to use **Event Templates** that are created in your `master company` -- used for customers with multiple regions;

#### Fixed
- Fixed `Recordings` listing on **Schedule** dashboard for `Europe Region` when using `AWS IVS` provider;
- Fixed **Salesforce** setup page dashboard;
- Fixed **External URL** session mode on `iOS` devices;

### November 3, 2021

#### Fixed
- Fixed `email.log.stats` **API Endpoint** grouping issue;

### November 1, 2021

#### Fixed
- Fixed `.ics` file generated for **Meetings** -- it will now display the proper organizer, their email, and the right `RSVP` options -- we also had to remove special characters from certain names to make it work;

### October 31, 2021

#### Fixed
- Fixed `Live Stream` stop button on **Control Room** mode (it was not stopping properly);

### October 29, 2021

#### Added
- Layout improvement (spacing) on **Live Studio** gallery layout;
- Added `sound indicator` (orange border) on **Live Studio**;

#### Fixed
- Fixed `JWT` encryption mode for **Socket** connection;
- Fixed `pinning` issue when screen sharing on **Live Studio**;

### October 28, 2021

#### Added
- Released **Live Studio** option for `Live Streaming` on **Virtual Lobby**:
  - The CDN used is always `Mux` and we also added the `Low Latency` option;
  - Once you start the `Live Stream`, it will only stop after explicitly requesting for it by clicking on `Stop Stream` **or** when there are no more users after `five minutes`;
  - Everything you see on your control room is exactly what attendees will see, even animations;
  - You can setup different layouts, with new options like `Hangouts` and `Picture in Picture`;
  - You can add `Lower Thirds` with title and subtitle, and also save presets to be used on the fly;
  - You can add `Chyron` (black strip at the bottom with rolling text) and also save presets to be used on the fly;
  - You can change the `Background Color` (the very first two colors are your event's colors) and also have presets to be used on the fly;
  - You can change the `Background Image` (we have a selection of images that you can use) and also upload images to be used on the fly;
  - You can change the `Background Video` (we have a selection of videos that you can use) and also upload videos to be used on the fly;
  - You can add to and remove users from the **Backstage** (like we have for `Control Room` video mode);

### October 26, 2021

#### Added
- Added new **Import Wizard** on **Invitees**, **Leads** and **Attendees** page:
  - Allows use of any spreadsheet format;
  - Gives you the option to customize the fields on that spreadsheet;
- Added option to show `end times` on `activity tiles` on **Virtual Lobby** with tool to enable/disable it;
- Improvements on **Networking Roulette**:
  - Added `sound notifications` when meeting is found and when meeting is almost over;
  - Added option to `extend meeting duration` when it's almost over (with tool to disable the option);
  - Added better `timer` user interface;
  - Fixed issue when reloading the page during a meeting;
- Added new [**Partners Integration**](https://inevent.com/en/partners-integrations.php) page with easy install option directly from it.
- Optimized **QR Code** dashboard to load faster for large events;
- Included `automatic emails` on **Email Analytics** dashboard;
- Updated `bounce` list with new statuses that some ISP providers give us;

#### Fixed
- Fixed **API Reference** load time by only highlighting specific blocks of code instead of highlighting everything;
- Fixed **Virtual Backgrounds** `CORS` issue when loading images from `AWS Cloudfront`;

### October 24, 2021

#### Added
- Improved `Content Page` selector on **Event Details** dashboard - it's now easier to select the primary page your attendees should see;

#### Fixed
- Fixed `Video Backgrounds` tool, it was being ignored and always showing the option;

### October 20, 2021

#### Added
- Added option to `sort` and `rename` **Materials** (files);
- Optimized **Summary** page for large events -- it will now load instantly;
- Optimized **Virtual Lobby Reports** analytics generation;
- Optimized **Company** creation time;

#### Fixed
- Deprecated **Agora.io** `WebRTC` provider, it will be completely removed by January 2022 and it is deactivated by default for all events. If you need to use it while it's there, please reach out to your Account Executive;
- Fixed `timezone` field on **Booking Forms**;
- Fixed **Booking Forms** submission listing on **Company** dashboard;

### October 19, 2021

#### Added
- Increased blur strength on `Virtual Backgrounds` for **Virtual Lobby** when using the blur option;
- Added `dark mode` for **API Reference** page;
- Added **API Reference** bookmark for companies with **API** enabled;
- Added link to [Developer Docs](https://developers.inevent.com/docs) on **API Reference**;

#### Fixed
- Fixed `ticket` field being duplicated on **Attendees** page;
- Fixed issue that the **Email** background color wouldn't save;
- Fixed date and time format for certain languages on **Virtual Lobby**;
- Fixed image distortion on `Virtual Backgrounds` depending on the camera aspect ratio for **Virtual Lobby**;

### October 18, 2021

#### Added
- Added new `Virtual Backgrounds Machine Learning Model` for **Virtual Lobby** that will now work on low end computers with better resolution:
  - Supported only on `Google Chrome` and `Firefox` for desktop;
  - Added custom background option with your company colors and logo;
- Added `updatedBeforeDate` and `updatedAfterDate` **API** keys on `event.person` model;
- Added option to search by `date` on following dashboards:
  - Event Flights;
  - Event Lodging;
  - Event Shuttle;
  - Event Attendees;
- Added **Attendance Tracking** hits on **Virtual Lobby Reports**;

#### Fixed
- Fixed default order for `live.analytics.*` **API Endpoint**;
- Fixed weird behavior on **Networking Roulette** that would break the `timer`;
- Fixed grouping issue on `live.analyticsGet` **API Endpoint**;

### October 14, 2021

#### Added
- Added `Clean Feed` option for `Staff` **permission level**;

#### Fixed
- Fixed **Attendance Tracking** popup frequency when using the `Minimum Frequency` setting -- it was showing way more than it should;

### October 13, 2021

#### Added
- Added `Landing Pages` list option for **Content Page** setting;
- Added support for **Native Websockets** on `Networking Roulette`;
- Added `[data-activity-id]` HTML attribute on **My Agenda** tiles;
- Added `Tag Sorting` for `Sponsor Booths` on **Virtual Lobby**;

#### Fixed
- Fixed `{{event-address}}` email replacement (that uses the Magic Link) from breaking the whole email out on `Outlook` and also breaking lines in a weird way for other email clients;
- Fixed **Custom Form** infinite loading icon (it was a visual bug);
- Fixed current language disappearing from the language list on **Virtual Lobby** when changing to a different language;

### October 12, 2021

#### Added
- Added button to `download` the pre-recorded video on **Sponsor Booths**;

#### Fixed
- Fixed audio feedback on `Device Configuration` modal popup when using **Agora.io** WebRTC provider;
- Fixed `Help Center` URL button on **Company Settings** dashboard;

### October 8, 2021

#### Added
- Added **Virtual Backgrounds** on `Virtual Lobby` for computers with dedicated `GPU` or `Apple M1` computers:
  - We currently use the `bodypix` Machine Learning model and we will in the future use the `ML Kit MediaPipe` model that will work for lower-end computers;
  - We will soon have the option to customize the virtual background image;

### October 7, 2021

#### Added
- Added `You are not registered to this event` popup notification for company admins that access the **Virtual Lobby** without being registered;

#### Fixed
- Fixed `event cover` section of the **Website** for `Holmes` and `Cosmos` templates;
- Fixed `activity.person.bind` API endpoint when creating brand-new attendees on the **Attendees** dashboard page;

### October 6, 2021

#### Added
- Added **Heading** for `You are not allowed to view this session` on **Virtual Lobby**;

#### Fixed
- Fixed image `crop` on **Europe Region**;
- Fixed `tickets` not showing up correctly on **Leads** page;

### October 5, 2021

#### Added
- Added more optimizations on `Background Blur` to achieve `30 FPS` when using it on lower end devices for **Virtual Lobby**;

### October 4, 2021

#### Added
- `Background Blur` now works on more devices and it's now optimized on lower end devices for **Virtual Lobby**;

#### Fixed
- Fixed **Email Lists** halting when **Salesforce Integration** failed due to a constraint on a campaign;
- Optimized **Booking Forms** and **Custom Forms** loading speeds;

### October 3, 2021

#### Fixed
- Fixed `Activity Days` not matching for certain `timezones` on **Virtual Lobby**, **My Agenda** and **Schedule Dashboard**;

### October 1, 2021

#### Added
- Added option to select a `template` when creating an **Event Booking Form** and added option to `reject` submitted events;
- Added `API Field` column on **Custom Fields** (API module: `feedback`) to be used in place of `feedbackID` column on **API Calls**:
  - Instead of sending `[{ "feedbackID" : 123, "value" : "abc" }, { "feedbackID" : 456, "value" : "def" }]` you can now send `{ "f_field_key_123" : "abc", "f_field_key_456" : "def" }`. Both ways remain valid.
- General improvements and optimizations on **Networking Roulette**;

#### Fixed
- Fixed `PHP SDK` documentation on submodules for **Developers**;
- Fixed `Screen Share` button that would disappear if you use the **Virtual Lobby** on a smaller window;
- Fixed `Speakers` section on `Saros Template` when using it as a **Custom Tab**;

### September 30, 2021

#### Added
- Added option to press `Enter` (carriage return) on `Yes` and `No` popups to automatically select `Yes` on **Virtual Lobby**;
- Added **API Field** `dateUpdated` on `event.person` module for easier filtering of updated users (useful for API crawling);
- Added column `Updated` on **Attendees** dashboard that can also be ordered and filtered;

#### Fixed
- Fixed display of `Video Conferencing` mode on Tablets for **Virtual Lobby**;
- Fixed issue on `Chat` when scrolling up and having `Public / Private` chat option available on **Virtual Lobby**;
- Fixed **Registration Form** when using it in a `private` event with access code and `CNAME` enabled;
- Fixed `activity dates` on **Virtual Lobby** and **My Agenda** when using it with languages other than `English` (it would not translate properly);
- Fixed issue on **Email Builder** that email sections would get too large and would distort when viewing it on `Outlook Desktop App`;
- Fixed `Website` section issues when using it as a **Custom Tab**. Affected templates and sections:
  - `Andromeda`: sponsors and photos;
  - `Cosmos`: speakers;
  - `Holmes`: speakers and photos;
  - `Janus`: photos;
  - `Jericho`: social icons;
  - `Lima`: photos;
  - `Mercury`: photos;
  - `Orion`: photos;

### September 29, 2021

#### Fixed
- Fixed **Attendees Report** that would get old answers on custom fields on certain scenarios;
- Fixed **Hubspot** integration issue when exporting new `Attendees` to Hubspot;

### September 28, 2021

#### Fixed
- Fixed issue when loading **Landing Page** dashboard files on `Europe Servers`;
- Fixed `Export with activities` tool issue when attendee has a lot of activities on **Reports**;
- Fixed **Attendees** dashboard page that would get old answers on custom fields on certain scenarios;

### September 27, 2021

#### Added
- Added **Hubspot** integration for basic `Import` and `Export` of leads -- a complete integration is coming soon;
- Added `CDN Caching` for **Materials** uploaded to the `European` regional server;
- Added `Back to lobby` popup **Heading** on **Virtual Lobby**;
- Added more code examples and option to `copy & paste` on **API Reference docs**;

#### Fixed
- Fixed **Website** issue that in certain circunstances it would reset the `favicon` and also would add duplicated titles in the page tab;

### September 23, 2021

#### Added
- Added option to customize `Popup Duration` on **Attendance Tracking** module (default remains 10 seconds);

#### Fixed
- Fixed issue on **Heading** markdown for `Registration Form`;
- Fixed mobile CSS issue on **Virtual Lobby** when using the `Inbox` function;

### September 22, 2021

#### Added
- Added `CA Trusted` certificates for **SSO Authentication**;

#### Fixed
- Fixed `Neo Template` Welcome Section background cover issue on **Virtual Lobby**;

### September 21, 2021

#### Added
- Optimized `Networking` sorting when filtering by `tags` on **Virtual Lobby**;
- Added button "go to most recent chat" on `Chat` for **Virtual Lobby** sessions;
- Added option to add **Transcriptions** in real time `manually` instead of using our automated `AI`;

#### Fixed
- Fixed `Voucher`, `Wallet` and `RSVP` buttons for regions other than `North America` on **Email Builder**;
- Fixed extra padding on `Questions` tab on **Virtual Lobby**;
- Fixed `Janus` and `Jericho` countdown section on **Website**;
- Fixed **Website settings** `speaker section` issue:
  - If you already had a custom section with "Speaker" in the label, it would not allow you to add the `Speaker` section;

### September 20, 2021

#### Added
- Added `Excel with activities` tool integration for **Leads Report**;
- Enabled `Markdown` support for `Form - Invite not found` **Heading**;

### September 16, 2021

#### Added
- Added option to open `poll` results on a presentation page for `presenters` on **Virtual Lobby**;
- Added follow up match on **Networking Roulette** to keep the flow;

#### Fixed
- Fixed issue on **Networking Roulette** that wouldn't allow users to match when `Profile Lock` tool was enabled;

### September 15, 2021

#### Added
- Added session tile `status labels` on **Virtual Lobby** when using `Classic Layout`;
- Added tool to enable and disable `Video Blur` option for presenters on **Virtual Lobby**;
- Added menu separation on **Virtual Lobby** lobby page for mobile phones;

#### Fixed
- Fixed issue on **Link Tracking** for links with spaces and dashes;
- Fixed issue on archiving `Sign language` channels on **Virtual Lobby**;
- Fixed page break on **My Agenda** to work on three columns;

### September 14, 2021

#### Added
- Optimized **Virtual Lobby Reports** load time for large events;

### September 13, 2021

#### Added
- Added support to access the **Virtual Lobby** with limited functionality when failing to connect to the realtime communication service (`Websocket`);
- Optimized **Summary** load time for large events;

### September 11, 2021

#### Added
- Added social media block tools integration on **Virtual Lobby**;
- Added tool to block `Instagram` on social media block tools;

### September 10, 2021

#### Added
- Added support for `audio sharing` when sharing a Google Chrome Tab on **Tokbox**;
- Added new `Low Latency Mode` when using **Mux** as streaming provider;

#### Fixed
- Fixed duplicated tooltip names on `networking` for **Virtual Lobby**;
- Fixed issue on `Control Room` when using **Tokbox** that would show hidden streams for a brief second when sharing and unsharing screen;
- Fixed `Automatic` layout issue on `Control Room` when using **Tokbox**;

### September 7, 2021

#### Added
- Added **Networking Roulette**:
  - There’s a new tab called `Networking Roulette` that allows people to engage on 1-1 meetings randomly in the **Virtual Lobby**;
  - Anyone that’s attending the event can join the `Networking Roulette`, but must not be private;
  - You can configure the duration of the meetings on the `Networking Roulette` or leave it undetermined;
  - When the timer is over, both users are sent back to the roulette lobby;
  - We save the history of meetings as a “stack of business cards” that you can retrieve later;
- Added `Transcription` support on **IVS**;
- Added option to customize **Meeting** duration, start and end times;
- Added **Feedback** form popup for `Sponsor Booths`;
- Added `Private Chat` for presenters on **Virtual Lobby**;

#### Fixed
- `Tickets` will not show up when disabled on **File Manager**;
- Removed `white cropping bars` when uploading pictures to **Materials** on `Sponsors` and `Activities`;
- Fixed **Stripe** issue with nonexistent `customer id`;
- Reversed `Screen share` icon status;
- Fixed `guestCheckIn` field on **Meeting Report**;
- Fixed `phone number` input flag;

## Version 15.9

### September 2, 2021

#### Added
- Added **tool** to disable and enable `meeting confirmation emails`;
- Added `firstName`, `lastName` and `telephone` on **Virtual Lobby Reports**;

### September 1, 2021

#### Added
- Added dedicated page for **Materials**:
  - This page contains all **materials** uploaded to all `Activities`, `Sponsor booths` and also `Event`;
- Added `VisualForce` module for **Salesforce**:
  - This module also works for `Attendees reports` on company level, without **Salesforce** integration;
- Added new **Headings** for customization:
  - **Form** `User Picture`;
  - **Form** `Summary`;
  - **Form** `Edit Button`;
  - **Form** `Done Button`;
  - **Activity Question** `Waiting for approval`;
  - **Virtual Lobby** `Starts at`;
  - **Virtual Lobby** `Started at`;
  - **Virtual Lobby** `Back to lobby`;
  - **Purchase** `Feedback success` (9 options);
  - **Purchase** `Feedback processing` (2 options);
  - **Login** `Request magic link`;

#### Fixed
- Fixed distorted images on `people` tab for **Virtual Lobby** session;
- Removed visual outline on popups for **Virtual Lobby** (blue line);
- Fixed chat opening issue on `Classic layout` for **Virtual Lobby**;
- Fixed `word break` on **Notifications** for **Virtual Lobby**;
- Fixed escaped character on `move to next session` popup for **Virtual Lobby**;

### August 31, 2021

#### Fixed
- Fixed `tag filtering` on **Sponsors Rooms** dedicated page;
- Fixed `HTTPS` urls for **Twitter** news feed messages on profile pictures;

### August 30, 2021

#### Fixed
- Fixed **Simulive** issue on `mobile devices`;
- Fixed `send button` on `session chat` for **Virtual Lobby**;
- Fixed issue on **Link Tracking** when using long names;
- Fixed issue on **Schedule** settings not loading `Virtual Room` on sessions with `people list linked`;

### August 27, 2021

#### Added
- Added **Link Tracking** support for `metadata` image and text lazy loading on social media sharing;
- Added **Audit reports** for `event settings` changes;

#### Fixed
- Fixed `autoplay` issue on certain devices when opening the video player too fast on **Virtual Lobby** (it would not play automatically on certain scenarios) - `iOS Safari` excluded (needs action to play);
- Fixed word breaking issues on **Email builder**;

### August 26, 2021

#### Fixed
- Fixed activity search when filtering by `tags` on **Virtual Lobby**;
- Optimizations on `Simulive` playback for **Virtual Lobby**;

### August 25, 2021

#### Added
- Added **Attendance Tracking** feature to track attendance on `CEU` credits:
  - Custom credit systems are available as well;
  - Popups to check attendance can have a custom frequency set per credit unit;
- Added `Clean Video Feed` output per WebRTC stream when using **Video Conferencing** and **Control Room**:
  - Each video stream has a button on the bottom-right corner that opens a `clean video & audio` output of that specific stream on a separate tab. The clean video & audio stream has isolated audio.
  - Only admins can access the clean video feed.

#### Fixed
- Fixed `Online People` counter on **Analytics Dashboard**;
- Fixed issue on `agenda restrictions` for **My Agenda** page;

### August 24, 2021

#### Added
- Added option to customize **Virtual Lobby** session tile status regardless of the video type:
  - Pre-recorded sessions can now have `LIVE` status, a great use case for Simulives;
- Added support to upload multiple files on `Sponsor Booths` and on `Sessions` on **Virtual Lobby**;
- Added mirrored video on `publisher stream` when usign **Agora.io** WebRTC provider;

#### Fixed
- Fixed scrollbar on **Event Booking Form**;

### August 23, 2021

#### Added
- Added support to delete `comments` directly on the backend and reflect it in realtime on **Virtual Lobby** sessions;
- Added support for **Sign Language** when viewing the session on fullscreen on `Classic Layout`;
- Added support for `LinkedIn` sharing of **UTM** links;

#### Fixed
- Fixed **Event Booking Form** issue that the admin invite email was being sent before the event was approved;
- Fixed **Email** format issue when opening it on `Outlook` desktop app;
- General fixes on **WCAG** support, including animations and transitions;
- Fixed issue that dropdowns wouldn't work on **Mobile** when using them on `forms`;

### August 20, 2021

#### Added
- Added new **Permission Level** `Staff` for user:
  - Has full `admin` permissions on attendee pages:
    - Virtual Lobby;
    - My Account;
    - My Agenda;
    - My Forms;
    - Networking;
    - Ticket Manager;
  - Can't access the `admin` dashboard backend page;

#### Fixed
- Fixed issue on **Networking** popup modal on **Virtual Lobby** `Classic Layout`;

### August 19, 2021

#### Fixed
- Fixed issues when using the **Virtual Lobby** in `French` language;
- Removed `index.php`, `form.php` and `purchase.php` from **Content Page** option list;

### August 18, 2021

#### Fixed
- Fixed `Map Online` world map chart for **Virtual Lobby** when using `Native Websockets`;

### August 17, 2021

#### Added
- Added option to filter by `tags` on **My Agenda**;
- Chat logs on **Virtual Lobby** are now deactivated by default (you must click on the toggle to enable it) (`admins only`);
- Added more accessibility updates on **WCAG** support -- included better navigation and description of elements;
- Added `timezone` information on public pages that have the `event cover` with event name and dates;
- Simplified `Content pages` list on **Event details** page;
- Added `attendee tags` on **Reports**;

#### Fixed
- Fixed **Push Notification** when using `Native Websockets`;
- Fixed **UTM** conversion issue when user doesn't exists in the platform on public `custom forms`;
- Fixed date and time format on `Callisto` **Website** template;

### August 16, 2021

#### Added
- Added better **Invite Email** for `Event Admins` that will contain a link to generate their system password:
  - This will effectively give them full admin access, while the `magic link` only gives attendee access level;
- Added improvements on **WCAG** support on `user profile` and `sponsor profile` modals on **Virtual Lobby**;
- Changed button `role` for **WCAG** on `Inbox` popup;

### August 13, 2021

#### Added
- Added `data-activity-id` HTML attribute on **My Agenda** tiles for easier `Custom CSS` management;

#### Fixed
- Fixed issue that the `payment` details wouldn't show up when using **Stripe**;

### August 12, 2021

#### Added
- **WCAG** updates:
  - Virtual Lobby
    - "Connecting please wait..." role="alert" ☑️
    - Inbox dialog (on the top bar) ☑️News Feed dialog (on the top bar) ☑️
    - My Languages dialog (on the top bar) ☑️
    - My Account menu dialog (on the top bar) ☑️
    - Filter by tags dialog (sponsor) ☑️
    - Filter by tags dialog (activities) ☑️
    - Search group rooms dialog ☑️
    - Group room individual dialog ☑️
    - Create group room dialog ☑️
    - Search participants dialog (networking) ☑️
      - Filter participants by tag ☑️
      - Participant individual dialog (networking) ☑️
      - ask to meet dialog ☑️
      - schedule meeting dialog ☑️
      - Please select the level of privacy for this call dialog ☑️
    - See all speakers dialog (on activities nodes) ☑️
      - Speaker Individual dialog ☑️
    - Sse all sponsors dialog (on activities nodes) ☑️
      - Sponsor Individual dialog ☑️
    - "This session has already finished" dialog ☑️
    - search for hidden errors ☑️
    - search for hidden items in general ☑️
  - Virtual Room
    - Join sessions button (for conferences and things like that) ☑️
    - Camera and microphone access dialog ☑️
    - Device Configuration dialog ☑️
    - "You are joining now" dialog ☑️
    - "Live content changed" dialog ☑️
    - Person individual dialog (inside people tab) ☑️
    - Sponsor individual dialog (below the activity) ☑️
    - Speaker individual dialog (below the activity) ☑️
    - "Read more" activity details dialog (below the activity) ☑️
    - Video call request dialog (from when the host invites you) ☑️
    - "Please select the level of privacy for this call" dialog (when you join a meeting) ☑️
    - "Change rooms" dialog (when you change a room) ☑️
    - "Do you want to invite PERSON.NAME to this session?" dialog (when you invite someone to your session using the networking tab on the left) ☑️
    - Person individual dialog (inside networking tab on the left) ☑️
    - "Loading next session please wait" dialog/alert ☑️
    - Back to lobby dialog ☑️
    - "Read more" sponsor details dialog (inside sponsor booth) ☑️
    - Session feedback dialog ☑️
    - Share content dialog (screen, pdf, video) ☑️
    - Button inside session (mute microphone, change call layout and etc) ☑️
    - change layout dialog (automatic, space-between, focus-mixed, focus-only) ☑️
    - stopping live stream dialog ☑️
    - Adjust volume with arrow-keys ☑️
    - Playback rate aria-pressed ☑️
  - Virtual Lobby  - Sponsors
    - Filter by tags dialog ☑️
  - Virtual Lobby  - Group Rooms
    - Add group room dialog ☑️
  - Virtual Lobby  - Activities
    - Filter by tags dialog ☑️
      - See all speakers dialog (on activities nodes) ☑️
    - Speaker Individual dialog ☑️
      - See all sponsors dialog (on activities nodes) ☑️
    - Sponsor Individual dialog ☑️
    - "This session has already finished" dialog ☑️
    - Networking dialog (top bar) ☑️
    - Group rooms dialog (top bar) ☑️
  - My Tickets (ticket-manager.php)
    - Giveaway ticket small dialog (list view small button on the right) ☑️
    - Send invite dialog ☑️
    - Copy invite link dialog ☑️
    - Send all tickets dialog ☑️
  - Virtual Lobby  - Networking (networking.php)
    - Profile individual dialog ☑️
    - Schedule meeting dialog ☑️
      - "confirm booking" dialog ☑️
  - My Agenda
    - New restriction dialog (restrictions) ☑️
    - Conflicted restrictions dialog (restrictions) ☑️
    - Remove comentary dialog (comments section inside activity details) ☑️
    - Speaker individual details (agenda  - inside activity details) ☑️
    - Sponsor individual details (agenda  - inside activity details) ☑️
    - Unpin activity dialog (agenda) ☑️
    - pin activity dialog (agenda) ☑️
      - DATE/TIME dialog ☑️

### August 11, 2021

#### Added
- Added new version of **Native Websockets** with the intent to fix the `count` of live users;

#### Fixed
- Fixed `sponsor` website links on **Website** to open on a new tab and not refresh the page in case it is empty;
- Fixed **Summary** left menu that breaks on certain languages;

### August 10, 2021

#### Fixed
- Fixed `calendar invite` organizer email issue on **ical** tool;
- Fixed issue on **Event Booking Form** when submitting it without `custom fields`;

### August 9, 2021

#### Added
- Added support for `profile picture` on Registration Form when using **Waitlist**;

#### Fixed
- Fixed **Summary** page layout issue for chart tiles;

### August 3, 2021

#### Added
- Added option to create **Custom Tabs** with a specific `Website Section & Template` on **Attendee Center**:
  - This option allows you to create multiple tabs for specific sections of the **Website** tool;
  - You don't need to use the same template you have in your **Website**;
  - You can create tabs with sections that you don't even have on your **Website**;
  - Example:
    - `Speakers` tab using **Callisto Template**;
    - `Sponsors` tab using **Lima Template**;
- Added option to **Whitelist** `domains` to `bypass` certain restrictions during the registration process:
  - Example:
    - Bypass the `invite requirement` when the email is `@inevent.com`;
    - Bypass the `ticket requirement` when the email is `@inevent.uk`;

### August 2, 2021

#### Added
- Improvements on `Welcome Section` when using an activity `Live Stream` as content for **Virtual Lobby**;
- Added support for **RTMP** streams on `Welcome Section` on **Virtual Lobby**;

#### Fixed
- Fixed **Ticket manager** ticket count on available and in use tickets - it was counting pending tickets too;

### July 30, 2021

#### Added
- Added **Tokbox** as primary endpoint for new companies and new events.

#### Fixed
- Fixed **Forgot password** tool when used on `mobile apps` and for `company specific` URLs;
- Fixed missing fields issue when using **Wirecard** payment method on `Purchase Form`;

### July 28, 2021

#### Added
- Added automatic `video conversion` when using `Low Latency` mode on **Control Room** and on `Mux Endpoint A` when using **RTMP**:
  - This means that you don't need to click on `Convert video` button anymore, it will be done automatically;
- Added support for multiple `Audio Interpreters` on a given channel for **Audio Interpretation** within a session:
  - These users must be enrolled at the event (new requirement) and must also have the `Interpreter` permission level;

#### Fixed
- Fixed **Inbox** closing issue every time you receive a new message;

### July 27, 2021

#### Added
- Added better **WCAG** support for `keyboard focus` on **Event Pages**;
- Added notifications when `Pre-recorded` videos fail to upload correctly on **Schedule** dashboard:
  - We also improved the UX when using our `video uploader` with more logs and status checks;
- Added `{{event-map-address}}` to render the physical address on `emails` when doing hybrid and in person events;
- Added `search box` on **Email health** page;
- Improvements on `Callisto` **Website** template;

#### Fixed
- Fixed `live count` when using `Native Websockets` on **Virtual Lobby**;
- Fixed layout issue on dedicated **Group Rooms** page when using mobile devices;
- Fixed issue when moving viewers to `next session` that has a different video mode on **Virtual Lobby**;
- Fixed user profile pictures on dedicated **Group Rooms** page when no picture is set;
- Added check when creating activities that end before it starts (sometimes admins do it by mistake);
- Fixed issue that when enabling a `virtual room` for a **Sponsor**, you'd have to refresh the page to correctly upload the video;
- Fixed error when removing a **custom list** that has a `link tracking` linked;

### July 26, 2021

#### Fixed
- Fixed issue on `Native Websockets` that allowed users to use the same credential to login on separate devices on **Virtual Lobby**;
- Fixed **Meeting** `rejection` email organizer and `reply-to` field;
- Fixed issue that prevented admins from adding `custom questions` on **Event Booking Form**;
- Fixed `duplication` issue on `people tab` on **Virtual Lobby** session that duplicated the same users on `Presenters` and `Viewers` in certain scenarios;

## Version 15.8

### July 23, 2021

#### Added
- Added option to collapse `left` and `right` columns when inside a session without the need to go on `full screen mode` on **Virtual Lobby**;
- Added support for mixed case `emails` on **SSO Authentication**;
- Added support for `ticket invitees` return their tickets to the `purchaser` when using the **Purchase Form**;

#### Fixed
- Fixed issue that the `Inbox` would not open when using a mobile device and inside a session on **Virtual Lobby**;
- Fixed issue that moving arrows would disappear when having a multiple day event with dozens of days and using the `Classic Layout` on **Virtual Lobby**;
- Fixed small height issue on `iPadOS` for **Virtual Lobby**;
- Fixed issue on **Paypal** with number format for multi language events;

### July 22, 2021

#### Added
- Added support for `iPadOS` layout and improved layout experience on all `mobile devices` when using the Neo Layout on **Virtual Lobby**;

### July 21, 2021

#### Added
- Added email validation message with actual email received from **SSO** SAML integration for better debugging;

#### Fixed
- Fixed issue when removing **Sponsor** that had previously broadcasted content through `Control Room`;
- Fixed `Sponsor` visibility issue that caused `sponsor admins` and `hosts` to not being able to view the room settings on **Virtual Lobby**;

### July 20, 2021

#### Added
- Added activity `Speakers` and `Sponsors` on `Learn more` modal popup when using template `Callisto` on **Website**;
- Added block to avoid users **purchasing** tickets when the registrations are closed:
  - This block is also implemented for the `Registration form` when the registrations close mid way through;
- Removed `InEvent` logo on `Meeting Rejection` automatic **Email**;

#### Fixed
- Fixed **Purchase** page issue when `confirm password` tool was enabled:
  - This issue only affected returning users (they had to be authenticated);
  - Returning users couldn't move out of the `Step 1` due to this issue;
- Fixed issue that when disabling **Custom CSS** tool, the `CSS` would remain active;
- Fixed `presenter` view position on **Tokbox** when using `Video Conferencing sessions` and `Speaker` view mode;

### July 19, 2021

#### Added
- Added **profile permission** for `polls`, `comments` and `questions` admin pages;

#### Fixed
- Fixed issue that `presenters` would remain in the list even after turning into `viewers` when using `Video Conferencing` with **Agora.io** WebRTC provider;
- Fixed issue that caused `Inbox` notification badges to never clear;
- Fixed `presenter` view position on **Tokbox** when using `Group Rooms` and `Speaker` view mode;

### July 15, 2021

#### Added
- Added **Event Feedback** popup option on all event public pages:
  - The popup is accessible through the top-right menu and it's called `Feedback` (it's customizable);
- Added support for `full HTML formatting` on `event description` when using **Neo Layout** with `overlay enabled`;

#### Fixed
- Fixed **Low Latency** stream issue when using `custom domains`:
  - The usage of `custom domains` caused a `CORS` issue within the video player and it has been fixed;
- Fixed error message showing up on **Virtual Lobby** when using `Pre-recorded` with a custom `iframe` that sends messages to its parent window;
- Fixed `Regional report` for **Virtual Lobby**:
  - It was showing up all devices that connected to the lobby instead of showing up unique users;
- Fixed minor issue that allowed users to send empty messages on **Chat**;

## Version 15.7

### July 14, 2021

#### Added
- Added `otherTicketsName` column on excel **report** for attendees page;
  - This column contains all `other` tickets the user has and are available to be used;
  - It's useful for events that uses multiple tickets for the same user;

#### Fixed
- Fixed **Low Latency** stream issue that a `blue play button` would show up and nothing happened when pressing it.
  - This bug happened when users were in the session before it started (seeing the idle board) and, when the stream started, a `blue play button` would show up and nothing happened when pressing it;
- Fixed error message when changing the **Event** dates incorrectly;

### July 13, 2021

#### Added
- Incorporated **SSO** login button directly into the full `login page` with all three options:
  - Use `SSO` to login;
  - Use InEvent's email and password to login;
  - Create a new account;
- Automatically hide the `Register now` card on **Login page** when the `Registration Form` tool is disabled;
- Added option to disable the **Event login page** (it's a tool). When disabled, unauthenticated users will be redirected to the `Registration form` directly, bypassing the following access flow: `login page > registration button > registration form`;
- Added **Headings** for `session tile statuses`:
  - Live;
  - On demand;
  - Finished;
  - Invisible (only admins can see these tiles);

#### Fixed
- Fixed `rejected` email for **Waitlists** when the `confirmation email` was disabled (they shouldn't be related);
- Fixed **Tokbox** recording layout when using `Video conferencing` mode;

### July 12, 2021

#### Added
- Added `Fullscreen` with `chat` support when using `Low Latency` mode for **Virtual Lobby**;
- Added option to `bulk update` attendee `permission level` on **Attendees** page;
- Added automatic `push notification` when scheduling a new **Meetings** on Virtual Lobby through `spreadsheet` import;
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