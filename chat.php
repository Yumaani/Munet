<?php
    session_start();
  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }

  $pdo = new PDO("sqlite:munet.sqlite");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $st = $pdo->query("select * from chat");
  $data = $st->fetchAll();
date_default_timezone_set("Asia/Tokyo");
    $time = date("Y-m-d H:i");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Munet-chat</title>
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form action="chat_submit.php" method="get">
        <div class="return">
            <?php print '<a href="chat_userSelect.php"><ion-icon name="return-left"></ion-icon></a>';?>
        </div>
        <div class="box">

            <div class="received-msg">
                <?php
                $user = $_SESSION["user"];
                if(!isset($_SESSION["target"])){
                    $_SESSION["target"] = $_GET["target"];
                }
                $target = $_SESSION["target"];
                $st = $pdo->query("select * from chat where (target ='$target' and fromer ='$user') or (target ='$user' and fromer ='$target')");
                $data = $st->fetchAll();
                foreach($data as $chat) {
                    print 'From '.h($chat["fromer"]). ' To '.h($chat["target"]).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.h($chat["time"]). '<br> '. h($chat["body"]) . '</p>';
                }
            ?>
            </div>

            <div class="inputBox">
                <input type="text" size="40" name="body"></textarea>
                <label>Enter your message</label>
            </div>
            <input type="submit" value="Send">
    </form>

    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
