<?php
  session_start();

  if ( isset($_GET["nickname"])&& isset($_GET["comment"])&& isset($_GET["artist"])&& isset($_GET["song"])){
    
    $nickname = $_GET["nickname"];
    $comment = $_GET["comment"];
    $artist = $_GET["artist"];
    $song = $_GET["song"];

    $pdo = new PDO("sqlite:munet.sqlite");

    $user = $_SESSION["user"];
    $st = $pdo->query("select * from user where username ='$user'");
    $user_on_db = $st->fetch(); 

    $pdo->query("UPDATE user SET nickname ='$nickname', comment = '$comment', artist = '$artist', song = '$song' WHERE username ='$user'");
   
    $result = "Succeed" ;
    print '<a href="home.php">Go to My Page</a>';
    
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>setting success</title>
    <link rel="stylesheet" href="submit.css">
  </head>
  <body>
    <div class="article">
      <?php print $result; ?>
    </div>
  </body>
</html>