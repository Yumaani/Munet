<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Login form</title>
    <link rel="stylesheet" href="myblog_style.css">
  </head>
  <body>
    <div class="box">
      <h2>Please login to Munet.com</h2>
      <form action="login_submit.php" method="get">

      <div class="inputBox">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="inputBox">
        <input type="password" name="passwd" required=""> 
        <label>Password</lable>
      </div>
      <input type="submit" name="" value="Login">
    </div>    
  </body>
</html>
