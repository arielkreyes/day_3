<?php require('login_parser.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login to your Account</title>
    <style>
    body  {
      background-color: darkmagenta;
      font-family: sans-serif;
      color: white;
      }
      label, input {
        display: block;
        border-radius: 5px;
        padding: 3px;
      }
      label {
        margin-top: 7px;
      }
      input[type='submit'] {
        margin-top: 7px;
      }
    </style>
  </head>
  <body>
    <h1>Log In</h1>
    <?php echo $feedback; ?>
    <form method="post" action="login.php">
      <label for="the_username">username</label>
      <input type="text" name="username" id="the_username"/>
      <label for="the_password">password</label>
      <input type="password" name="password" id="the_password" />
      <input type="submit" value="Log In" />
      <input type="hidden" name="did_login" value="true" />
    </form>
  </body>
</html>
