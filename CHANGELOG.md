# InEvent Change Log

This change log was created on January 22, 2021 and only entries after this date will be registered.

## Version 13.9

### February 9, 2021

#### Fixed
- Fixed **Salesforce** [2,000 offset cap](https://developer.salesforce.com/forums/?id=906F0000000DDCyIAO) by using `WHERE` clauses;

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