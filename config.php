<?php

session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('811481004870-qeo9ib86j6mg4f6vd4u87mi84laupmm2.apps.googleusercontent.com');
$google_client->setClientSecret('Wua5fNbNrpHrZojoFjYVQYiX');
$google_client->setRedirectUri('http://localhost/sociallogin/gCallback.php');
$google_client->addScope('email');
$google_client->addScope('profile');

require_once 'vendor/facebook/graph-sdk/src/Facebook/autoload.php';
$facebook = new \Facebook\Facebook([
'app_id' => '964233940741419',
'app_secret' => 'b24a9061698a279c5e7f6ef007ac29ab',
'default_graph_version' => 'v8.0'
]);
$facebook_helper = $facebook->getRedirectLoginHelper();
$facebook_permissions = ['email'];    

?>