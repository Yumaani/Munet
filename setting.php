<?php
  session_start();

  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
  <span class="text"><h1>settings</h1></span>
  <div class="return">
    <?php print '<a href="home.php"><ion-icon name="return-left"></ion-icon></a>';?>
  </div>
  <div class="container">
      <div class="card">
        <div class="content">
        <h2>1</h2>
          <a href="profile_form.php">Change profile</a><br>
        </div>
      </div>
      <div class="card">
        <div class="content">
        <h2>2</h2>
          <a href="signout_form.php">Delect account</a>
        </div>
      </div>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>