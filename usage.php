<?php

/*****************************************
 * CONFIG
 *****************************************/
set_time_limit(0);
define("DS", "/");
define("FB_APP_ID", "XXXXXXXXXXXXXXX");
define("FB_APP_SECRET", "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

/*****************************************
 * REQUIREMENTS
 *****************************************/
require_once("libs".DS."facebook_notification.php");
require_once("vendors".DS."facebook-php-sdk".DS."src".DS."facebook.php");

/*****************************************
 * USAGE
 *****************************************/
$notification_object = new FacebookNotification(FB_APP_ID, FB_APP_SECRET);
$notification_object->send("FACEBOOK_USER_ID_RECIPIENT", "Lorem ipsum dolor sit amet", "custom_referer");

?>