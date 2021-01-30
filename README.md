# sociallogin
1. save in localhost directory (example: htdocs if using xampp) and also required composer
3. change below lines in config.php in root folder as per your ( https://console.developers.google.com/ || https://developers.facebook.com/ ) credentials
   * $google_client->setClientId('');
   * $google_client->setClientSecret('');
   * $facebook = new \Facebook\Facebook([
         'app_id' => '',
         'app_secret' => '',
         'default_graph_version' => 'v8.0'
     ]);
5. help full reference (https://www.webslesson.info/2019/09/how-to-make-login-with-google-account-using-php.html)
6. help full reference (https://www.webslesson.info/2019/10/how-to-implement-login-using-facebook-account-in-php.html)

