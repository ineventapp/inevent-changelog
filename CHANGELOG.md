# InEvent Change Log

This change log was created on January 22, 2021 and only entries after this date will be registered.

## Version 14.1

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