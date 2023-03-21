<?php
    session_start();
  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }

  $pdo = new PDO("sqlite:munet.sqlite");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>

<html >
<head>
    <meta charset="utf-8">
    <title>profile</title>
    <link rel="stylesheet" href="about.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="return">
        <?php print '<a href="home.php"><ion-icon name="return-left"></ion-icon></a>';?>
    </div>

    <div class="card middle">
        <div class="front">
            <?php
                $user = $_SESSION["user"];
                $st = $pdo->query("select * from user where username ='$user'");
                // $st = $pdo->query("select * from user");
                $row = $st->fetchAll();
                $row=$row[0];

                // for($i = 0; $row=$st->fetch(); ++$i ){
                print '<h2>About me</h2><br>';
                print '<span>Nickname: '.h($row["nickname"]). '<br><br> Message: '.h($row["comment"]). '<br><br> Your favorite musician: '. h($row["artist"]) .'<br><br> Your favorite song: ' .h($row["song"]) . '</span>';       
            ?>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
