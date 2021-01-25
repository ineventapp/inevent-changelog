# InEvent Change Log

This change log was created on January 22, 2020 and only entries after this date will be registered.

## Version 13.81

### January 24, 2020

#### Fixed
- Fixed chat input field misposition on Virtual Lobby classic layout;
- Fixed registration form analytics field names on pie charts and bar charts;
- Fixed fullscreen layout for Gallery and Speaker view on Virtual Lobby Neo layout;

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