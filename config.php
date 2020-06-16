<?php 
/* 
 * Basic Site Settings and API Configuration 
 */ 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', '_ad_vr_db'); 
define('DB_USER_TBL', 'a_user'); 
 
// Twitter API configuration 
define('TW_CONSUMER_KEY', 'yourkey'); 
define('TW_CONSUMER_SECRET', 'yoursecret'); 
define('TW_REDIRECT_URL', 'redirect link'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Twitter client library  
require_once 'inc/twitteroauth.php';
