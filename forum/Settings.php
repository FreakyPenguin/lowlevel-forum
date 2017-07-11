<?php
/******************************************************************************
* Settings.php                                                                *
*******************************************************************************
* SMF: Simple Machines Forum                                                  *
* Open-Source Project Inspired by Zef Hemel (zef@zefhemel.com)                *
* =========================================================================== *
* Software Version:           SMF 1.0                                         *
* Software by:                Simple Machines (http://www.simplemachines.org) *
* Copyright 2001-2005 by:     Lewis Media (http://www.lewismedia.com)         *
* Support, News, Updates at:  http://www.simplemachines.org                   *
*******************************************************************************
* This program is free software; you may redistribute it and/or modify it     *
* under the terms of the provided license as published by Lewis Media.        *
*                                                                             *
* This program is distributed in the hope that it is and will be useful,      *
* but WITHOUT ANY WARRANTIES; without even any implied warranty of            *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                        *
*                                                                             *
* See the "license.txt" file for details of the Simple Machines license.      *
* The latest version can always be found at http://www.simplemachines.org.    *
******************************************************************************/

########## Maintenance ##########
# Note: If $maintenance is set to 2, the forum will be unusable!  Change it to 0 to fix it.
$maintenance = 0;		# Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
$mtitle = 'Upgrading the forum...';		# Title for the Maintenance Mode message.
$mmessage = 'Don\'t worry, we will be back shortly with an updated forum.  It will only be a minute ;).';		# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'Lowlevel';		# The name of your forum.
$language = 'german_informal-utf8';		# The default language file set for the forum.
$boardurl = 'https://forum.lowlevel.eu';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'forum@lowlevel.eu';		# Email address to send emails from. (like noreply@yourdomain.com.)
$cookiename = 'SMFCookie11';		# Name of the cookie to set for authentication.

########## Database Info ##########
$db_type = 'mysqli';
$db_server = $_ENV['DB_HOSTNAME'];
$db_name = $_ENV['DB_DATABASE'];
$db_user = $_ENV['DB_USER'];
$db_passwd = $_ENV['DB_PASSWORD'];
$db_prefix = 'smf_';
$db_persist = 0;
$db_error_send = 0;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = '/var/www/html/';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = '/var/www/html/Sources';	# Path to the Sources directory.
$cachedir = '/cache';

$image_proxy_secret = $_ENV['IMAGE_PROXY_SECRET'];
$image_proxy_maxsize = 5190;
$image_proxy_enabled = 0;

########## Error-Catching ##########
# Note: You shouldn't touch these settings.
$db_last_error = 1265814629;

?>
