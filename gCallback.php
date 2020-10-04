<?php
require_once('config.php');

if (isset($_SESSION['access_token'])) {
	$google_client->setAccessToken($_SESSION['access_token']);
}
else if (isset($_GET['code'])) {
	$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
	if (!isset($token['error'])) {
		$_SESSION['access_token'] = $token['access_token'];
	}
}
else {
	header('Location: login.php');
}

$google_service = new Google_Service_Oauth2($google_client);
$gData = $google_service->userinfo->get();

$_SESSION['id'] = $gData['id'];
$_SESSION['email'] = $gData['email'];
$_SESSION['gender'] = $gData['gender'];
$_SESSION['picture'] = $gData['picture'];
$_SESSION['name'] = $gData['name'];

header('Location: index.php');

?>