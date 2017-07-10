This patch will provide important security and bug fixes to your 2.0.11 forum.

Changelog
=========
- Fixed word censor injection by disallowing an empty 'proper word'
- Fixed vulnerable unserialize() code by converting all instances to safe_unserialize()
- Added a more thorough safe_unserialize() function to prevent object injection
- Fixed bug where leaving a custom profile field blank on registration that has an email mask would throw an error
- Fixed PayPal integration to comply with their new forced SSL policy
- Fixed bug where notifications were sent for messages in inaccessible boards
- Fixed editor to make the editor work with Microsoft Edge
- Fixed issue where smiley popup window is blank on iOS 9 devices
- Fixed WYSIWYG editor in mobile devices
- Fixed an undefined $_POST['icon'] in Sources/Post.php
- Fixed a minor bug in Login2()
- Fixed an issue where SMF doesn't recognize new domain names and considers these as invalid
- Fixed an issue where SMF would allow empty BBC
- Fixed an issue where theme variants could not be selected
- Fixed an issue where the file version of Subs-Post.php could have been 2.0.8 or 2.0.11. It will be updated to 2.0.12 in either case.