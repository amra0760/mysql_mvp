<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  
  <div class ="header">
      <img src="images/P_Logo1.jpg" class="logo" width="100" height="200" />
      <h2>Login</h2>
  </div>
  
  <form method="post" action="login.php">
      <!--display validation errors here-->
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type = "text" name="username">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type = "password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
      </div>
      <p>
        Not yet a member? <a href="register.php">Sign UP</a>
      </p>
  </form>
  
  
  
  </body>
</html>