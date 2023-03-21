<?php
  session_start();
  
  if (isset($_GET["username"]) && isset($_GET["passwd"])&& isset($_GET["nickname"])&& isset($_GET["comment"])&& isset($_GET["artist"])&& isset($_GET["song"])) {
    $username = $_GET["username"];
    $passwd = $_GET["passwd"];
    $nickname = $_GET["nickname"];
    $comment = $_GET["comment"];
    $artist = $_GET["artist"];
    $song = $_GET["song"];

    $pdo = new PDO("sqlite:munet.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $st = $pdo->prepare("INSERT INTO user(username, password,nickname,comment,artist,song) VALUES (?, ?, ?, ?, ?, ?)");
    $st->execute(array($username, $passwd,$nickname,$comment,$artist,$song));

    $result = "Your account was created";
    print '<a href="home.php">Return</a>';
  }
  else {
    $result = "Please try again";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign in succeed</title>
    <link rel="stylesheet" href="submit.css">
  </head>
  <body>
    <div class="article">
      <?php print $result; ?>
    </div>
  </body>
</html>
