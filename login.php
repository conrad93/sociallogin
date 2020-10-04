<?php
require_once('config.php');
if (isset($_SESSION['access_token'])) {
  header('Location: index.php');
}
$gLoginURL = $google_client->createAuthUrl();
$fbLoginUrl = $facebook_helper->getLoginUrl('http://localhost/sociallogin/fbCallback.php', $facebook_permissions);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row justify-content-center p-5">
  			<div class="col-md-4">
  				<div class="card text-center">
  					<h5 class="card-header">Login!!!</h5>
  					<div class="card-body">
                        <p>
                        	<a href="<?php echo $gLoginURL;?>">
                        	    <img src="img/btn_google_signin_light_normal_web.png">
                            </a>
                        </p>
                        <p>
                        	-OR-
                        </p>
                        <p>
                        	<!-- <div class="fb-login-button" data-size="medium" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width="" onclick="window.location='<?php echo $fbLoginUrl ?>';"></div> -->
                        	<a href="<?php echo $fbLoginUrl;?>">
                        		<button class="btn btn-primary">Sign in with Facebook</button>
                        	</a>
                        </p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!-- <div id="fb-root"></div> -->
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=964233940741419&autoLogAppEvents=1" nonce="2Mxnntan"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>