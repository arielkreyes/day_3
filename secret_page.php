<?php
session_start();
//if the cookies is still valid, re-create the Session
if($_COOKIE['loggedin']){
  $_SESSION['logged_in'] = true;
}


//security! if the user is logged in
if(!$_SESSION['loggedin']){
//send user back to log in
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Your Secret Squirrel Page</title>
    <style>
      body  {
        background-color: darkmagenta;
        font-family: sans-serif;
        color: white;
        }
    </style>
  </head>
  <body>
    <h1>You Are Logged In!</h1>
    <p>Mission Success.</p>
    <a href="login.php?action=logout">Log Out</a>
  </body>
</html>
