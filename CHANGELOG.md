# InEvent Change Log

This change log was created on January 22, 2020 and only entries after this date will be registered.

## Version 13.82

### January 25, 2020

#### Fixed
- Fixed Notifications endpoint to avoid ghost users on Virtual Lobby;
- Fixed 'Send Now' notification button on push notification screen;
- Fixed 'Back' button on My Agenda page;

## Version 13.81

### January 25, 2020

#### Fixed
- Fixed permission to download recordings on Europe region;
- Fixed collapse networking tool when sponsors are disabled;
- Fixed admin email notification that was using environment's language instead of company's language to generate its content;

### January 24, 2020

#### Fixed
- Fixed chat input field misposition on Virtual Lobby classic layout;
- Fixed registration form analytics field names on pie charts and bar charts;
- Fixed fullscreen layout for Gallery and Speaker view on Virtual Lobby Neo layout;
- Fixed device settings popup on fullscreen;
- Fixed clickbox on left and right menus buttons Virtual Lobby Neo layout;
- Fixed wrong rounded edges on right menu Virtual Lobby Neo layout;

## Version 13.80

### January 22, 2020

#### Added
- Added visual identification showing how to enable your camera and mic for Tokbox (previously only on Agora);
- Added Vimeo and YouTube url parsing on sponsor edit popup on Virtual Lobby;
- Added more layout updates to avoid having the networking section smaller than it should be;
- Upgrade Firebase version;

#### Fixed
- Fixed wrong bounce identification for invalid "from" addresses;
- Fixed auto live update on Virtual Lobby, now we ignore old changes and only listen to new changes;
- Fixed emoji popup cutoff;
- Fixed mux logs, we will soon have a way to control hours of stream per account;
- Fixed web notification for unsupported devices (Safari on older iOS);
- Fixed Tokbox recording failed message even though the recording started successfully;