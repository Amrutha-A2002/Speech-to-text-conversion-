<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Literary Hub</title>
  <link href="login.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <form action="loginaction.php" method="post" enctype="multipart/form-data" id="login-form">
      <div class="form-group">
        <label for="login-email">Email:</label>
        <input type="email"  name="email" class="form-control" id="login-email" required>
      </div>
      <div class="form-group">
        <label for="login-password">Password:</label>
        <input type="password" name="password" class="form-control" id="login-password" required>
      </div>
      <div class="form-group">
        <button type="submit" >Login</button>
      </div>
    </form>
    <div class="switch-form">
      <span>Don't have an account? <a href="register.php">Register</a></span>
    </div>
  </div>
    

  
  </body>
  </html>