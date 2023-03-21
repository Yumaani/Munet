<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Sign form</title>
    <link rel="stylesheet" href="myblog_style.css">
  </head>
  <body>
    <div class="box">
      <h2>Please create your Munet account</h2>
      <form action="signup_submit.php" method="get">

      <div class="inputBox">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="inputBox">
        <input type="password" name="passwd" required="">
        <label>Password</lable>
      </div>

      <div class="inputBox">
        <input type="text" name="nickname" required="">
        <label>Nickname</label>
      </div>
      <div class="inputBox">
        <input type="text" name="comment" required="">
        <label>Message</label>
      </div>
      <div class="inputBox">
        <input type="text" name="artist" required="">
        <label>Your favorite musician</label>
      </div>
      <div class="inputBox">
        <input type="text" name="song" required="">
        <label>your favorite song</label>
      </div>
      
      <input type="submit" value="Create">
    </div>    
  </body>
</html>