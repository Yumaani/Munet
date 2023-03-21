<?php
  session_start();
  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <span class="text"><h1>munet</h1></span>

    <div class="botton">
      <?php print '<a href="top.php"><ion-icon name="log-out"></ion-icon></a>';?>
    </div>

    <div class="container">
      <div class="card">
        <div class="content">
          <h2>1</h2>
          <?php print '<a href="profile.php">Profile</a>';?>
          </div>
      </div>

      <div class="card">
        <div class="content">
          <h2>2</h2>
          <?php print '<a href="music.html">Music</a>';?>
          </div>
      </div>

      <div class="card">
        <div class="content">
          <h2>3</h2>
          <?php print '<a href="chat_userSelect.php">Chat</a>';?>
          </div>
      </div>

      <div class="card">
        <div class="content">
          <h2>4</h2>
          <?php print '<a href="setting.php">Settings</a>';?>
          </div>
      </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>