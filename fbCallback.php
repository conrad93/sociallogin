<?php
require_once('config.php');
try {
	$access_token = $facebook_helper->getAccessToken();
	$_SESSION['access_token'] = $access_token;
	$facebook->setDefaultAccessToken($_SESSION['access_token']);
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
	echo "Response Exception: ". $e->getMessage();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
	echo "SDK Exception: ". $e->getMessage();
}
if(!$access_token) {
	header('Location: login.php');
}
$graph_response = $facebook->get("/me?fields=name,email,gender", $access_token);
$fbData = $graph_response->getGraphUser();
$_SESSION['id'] = $fbData['id'];
$_SESSION['email'] = $fbData['email'];
$_SESSION['gender'] = $fbData['gender'];
$_SESSION['picture'] = 'http://graph.facebook.com/'.$fbData['id'].'/picture';
$_SESSION['name'] = $fbData['name'];
header('Location: index.php');

?>