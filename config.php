<?php

// DB Connection
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "sample");

define("SITE_NAME", "RestAPI");


// Money format
setlocale(LC_MONETARY, 'en_IN');


/***************************************
		Encryption Algorithm
***************************************/
// DEFINE our cipher
define('AES_256_CBC', 'aes-256-cbc');
// Generate a 256-bit encryption key
// define("secure_encryption_key", "ieecdd00cb!@#$");
define("secure_encryption_key", "h0if0bfffd%^&*#@");
// Generate an initialization vector
// define("secure_iv", "hihehccb00!@#$()");
define("secure_iv", "h0if0bfffd%^&*#()");

// define_ip_srv("secure_iv", "");

// error reporting
// error_reporting(0);
@session_start();

date_default_timezone_set('Asia/kolkata');

require_once("dbclass.php");
$db = new db();
?>