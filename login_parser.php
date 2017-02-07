<?php
session_start();
error_reporting( E_ALL & ~E_NOTICE );
//begin parsing form here if the user submitted it
if($_POST['did_login']){
//TEMPORARY:the correct credentials for logging in. This will be replaced with database stuffs later
  $correct_username = 'starbucks';
  $correct_password = 'ventibucks';
//the values the user typed in:
  $username = $_POST['username'];
  $password = $_POST['password'];
//check to see if they matched both the username and password
  if($username === $correct_username AND $password === $correct_password){
//Remember the user for 1 week
    $_SESSION['loggedin'] = true;
    setcookie('loggedin', true, time() + 60 * 60 * 24 * 7);
//send to secret squirrel page
    header('location:secret_page.php');
  } else {
//show error here
    $feedback = 'Your username and password combo is incorrect';
  }
}//end of form parser
//is the user trying to log out?
if($_GET['action'] == 'logout'){
//destroy the Session
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
  session_destroy();
}
//cookie expiration
setcookie('loggedin', '', time() - 999 );
}//end of logout logic
