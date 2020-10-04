<?php

session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('insert your client id here');
$google_client->setClientSecret('insert your client secret here');
$google_client->setRedirectUri('http://localhost/sociallogin/gCallback.php');
$google_client->addScope('email');
$google_client->addScope('profile');

require_once 'vendor/facebook/graph-sdk/src/Facebook/autoload.php';
$facebook = new \Facebook\Facebook([
'app_id' => 'insert your id here',
'app_secret' => 'insert your client secret here',
'default_graph_version' => 'v8.0' // check version on console.facebook.com
]);
$facebook_helper = $facebook->getRedirectLoginHelper();
$facebook_permissions = ['email'];    

?>