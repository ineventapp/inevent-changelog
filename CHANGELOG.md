# InEvent Change Log

This change log was created on January 22, 2021 and only entries after this date will be registered.

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