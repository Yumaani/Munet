<?php
  session_start();

  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>munet</title>
    <link rel="stylesheet" href="top.css">
  </head>
  <body>
    
<!--
    <div class="container">
      <div class="image"></div>
    </div>
 -->
     <div class="bubbles">
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
    </div>

    <span class="text">Munet</span>

    <div class="side">
      <a href="about.html" style="background:#27ae60;">About</a>
      <a href="login_form.php" style="background:#c0392b;">Log in</a>
      <a href="signup_form.php" style="background:#2c3e50;">Sign in</a>
    </div>

    
  </body>
</html>
