<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Settings form</title>
    <link rel="stylesheet" href="myblog_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="return">
        <a href="setting.php"><ion-icon name="return-left"></ion-icon></a>
    </div>
    <div class="box">
      <h2>Revise your personal information</h2>
      <form action="profile_submit.php" method="get">

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

      <input type=submit value="Change">
    </div>    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>