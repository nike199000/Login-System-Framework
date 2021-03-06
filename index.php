<?php

/**
*
* "Hyip-Script" is a copyrighted . It remains the property of it's original author: Ossama.
*
*
* This file is part of Hyip-Script. Please don't reproduce any part of the script without the permissions of Ossama.
*
* Please contact: contact[at]ossamarafique[dot]com for queries.
*
* Copyrighted 2017 - Ossama
*
*/

if(version_compare(PHP_VERSION, '5.3.7', '<')) {
exit('Sorry, this script does not run on a PHP version smaller than 5.3.7!');
} elseif (version_compare(PHP_VERSION, '5.5.0', '<')) {
require_once('libraries/password_compatibility_library.php');
}

require_once('functions/Core.php');
require_once('config/config.php');
require_once('libraries/PHPMailer.php');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once('functions/init.php');

if(UserLoggedIn() == true) {

$pageName = "Dashboard";
    
require_once('assets/inc/frontend_header.php');
include('assets/pages/dashboard.php');
require_once('assets/inc/_footer.php');

} else {	
	
$pageName = "Home";
	
require_once('assets/inc/frontend_header.php');
include('assets/pages/index_home.php');
require_once('assets/inc/_footer.php');
	
}

mysqli_close($con);