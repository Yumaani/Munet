<?php
  session_start();

  if (isset($_GET["username"]) && isset($_GET["passwd"])) {
    $username = $_GET["username"];
    $passwd = $_GET["passwd"];

    $pdo = new PDO("sqlite:munet.sqlite");
    $st = $pdo->prepare("SELECT * FROM user WHERE username=?");
    $st->execute(array($username));
    $user_on_db = $st->fetch(); 

    if (!$user_on_db) {
      $result = "No such account";
      print '<a href="login_form.php">Return</a>';
    } else if ($user_on_db["password"] == $passwd ){//正しく判定されない
      $_SESSION["user"] = $username;
      $result = "Hello, " . $username;
      print '<a href="home.php">Go to My Page</a>';
    } else {
      $result = "Wrong Username or Password";
      print '<a href="login_form.php">Try again</a>';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="submit.css">
  </head>
  <body>
    <div class="article">
      <?php print $result; ?>
    </div>
  </body>
</html>
