<?php
  session_start();

  if(isset($_GET['username']))  $username=$_GET['username']; 
  if(isset($_GET['password']))  $password=$_GET['password'];
  
  $db = new PDO("sqlite:munet.sqlite"); 
  if(isset($username) && isset($password))	{
    $db->query("DELETE FROM user WHERE username='$username'");
    $result = "Your account was delected successfully";
    print '<a href="top.php">Return</a>';
  } 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign out</title>
    <link rel="stylesheet" href="submit.css">
  </head>
  <body>
    <div class="article">
      <?php print $result; ?>
    </div>
  </body>
</html>
