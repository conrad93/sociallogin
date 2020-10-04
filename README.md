"# sociallogin" 
heroku link:- http://conrad-demo-sociallogin.herokuapp.com/
1. download folder 
2. save in your localhost directory (example: htdocs if using xampp)
3. $google_client->setClientId('811481004870-4l6fp7e23t28nmmk5vbnbd8bg5mp5gvd.apps.googleusercontent.com');
   $google_client->setClientSecret('ADfRXbxFiZQjgf7C0ys-mJak');
   $google_client->setRedirectUri('http://conrad-demo-sociallogin.herokuapp.com/');
   change above three lines in config.php in root folder as per your https://console.developers.google.com/ credentials (not required)
4. header('location:http://conrad-demo-sociallogin.herokuapp.com/');
   change above line in logout.php in root folder as per your desired location (not required)
5. open index.php 

