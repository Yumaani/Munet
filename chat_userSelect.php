<?php
  session_start();

  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Munet-chat</title>
    <link rel="stylesheet" href="chatselect.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="return">
        <a href="home.php">
            <ion-icon name="return-left"></ion-icon>
        </a>
    </div>
    <div class="task-list middle">
        <h2>Select your friend</h2>
        <div class="radio">
            <form action="chat.php" method="get">
                <?php
                $pdo = new PDO("sqlite:munet.sqlite");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $user = $_SESSION["user"];
                $st = $pdo->query("select * from user where username != ?");
                $st2 = $pdo->query("select * from user where username = ?");
                $st->execute(array($user));
                $st2->execute(array($user));
                $data = $st->fetchAll();
                $data2 = $st2->fetchAll();
                foreach($data2 as $yours){
                foreach($data as $otherusers) {
                    if( $otherusers["artist"] ==$yours["artist"]  ){
                    print '<input type="radio" name="target" value ="'.h($otherusers["username"]).'"> ';
                    print '<label class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.h($otherusers["username"]).' Likes same artists</label><br><br>';
                    }else{
                     print '<input type="radio" name="target" value ="'.h($otherusers["username"]).'"> ';
                    print '<label class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.h($otherusers["username"]).'</label><br><br>';
                }
                }
            }
                $_SESSION["target"] = null;
            ?>
        </div>

        <div class="submit">
            <input type="submit" value="begin to chat">
        </div>

        </form>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
