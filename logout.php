<?php

//logout.php

include('config.php');

//Reset OAuth access token
// $google_client->revokeToken();
$google_client->revokeToken($_SESSION['access_token']);

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:http://conrad-demo-sociallogin.herokuapp.com/');

?>
