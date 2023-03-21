<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Signout form</title>
    <link rel="stylesheet" href="myblog_style.css">
  </head>
  <body>
    <div class="box">
      <h2>Delete your Munet account</h2>
      <form action="signout_submit.php" method="get">

      <div class="inputBox">
        <input type="text" name="username" required="">
        <label>Username</lable>
      </div>
      <div class="inputBox">
        <input type="password" name="password" required="">
        <label>Password</lable>
      </div>
      <input type="submit" value="Delete">
      </form>
    </div>    
  </body>
</html>