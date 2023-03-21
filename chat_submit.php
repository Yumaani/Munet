<?php
session_start();
  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
date_default_timezone_set("Asia/Tokyo");
    $time = date("Y-m-d H:i");

if (isset($_GET["body"])) {
    $target = $_SESSION["target"];
    $body = $_GET["body"];
    $fromer = $_SESSION["user"];
    
       $pdo = new PDO("sqlite:munet.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
              $st = $pdo->prepare("INSERT INTO chat( fromer, target, time, body ) VALUES ( ?, ?, ?, ?)");
      $st->execute(array( $fromer, $target,$time,$body));

}
    header( "Location:chat.php");
?>
