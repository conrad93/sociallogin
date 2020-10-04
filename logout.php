<?php

require_once('config.php');
// $google_client->revokeToken($_SESSION['access_token']);
unset($_SESSION['access_token']);
session_destroy();
header('location:login.php');

?>