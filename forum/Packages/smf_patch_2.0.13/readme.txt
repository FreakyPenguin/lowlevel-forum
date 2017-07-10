This patch will provide important security and bug fixes to your 2.0.12 forum.

Changelog
=========
index.php
 - Updated version to 2.0.13

Sources/Calendar.php
 - Updated version to 2.0.12

Sources/ManagePosts.php
 - Updated version to 2.0.12

Sources/Display.php
 - Updated version to 2.0.12

Sources/Subscriptions-PayPal.php
 - Updated version to 2.0.12

Sources/Themes.php
 - Updated version to 2.0.13
 - Added session check.

Sources/LogInOut.php
 - Updated version to 2.0.13
 - Added sanitization to $_REQUEST['u']

Sources/Reminder.php
 - Updated version to 2.0.13
 - Check and sinitization for $_POST['user']
 - Isset $_REQUEST['uid'] if ! then $_REQUEST['uid'] = 0

Sources/PackageGet.php (Special thanks to Q)
 - Updated version to 2.0.13
 - Added sanitization of package site
 - Added session check

Sources/Subs-Post.php
 - Updated version to 2.0.13
 - Rollback of 2.0.12 empty BBC

Sources/Subs.php
 - Updated version to 2.0.13
 - Remove some limits in safe_unserialize()

Special Thanks
 - Q
