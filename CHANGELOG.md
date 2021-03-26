# InEvent Change Log

This change log was created on January 22, 2021 and only entries after this date will be registered.

## Version 14.5

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