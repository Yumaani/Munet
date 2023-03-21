<?php
  session_start();

  function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="myblog_style.css">
  </head>
  <body>
    <?php
      print '<p class="article_link">[<a href="top.php">ログアウト</a>]</p>';
      print '<h1>munet</h1>';
      print '<p class="article_link">ようこそ' . $_SESSION["user"] . 'さん!</p>';
      print '<p class="article_link">[<a href="home.php">ホーム</a>]</p>';
      print '<p class="article_link">[<a href="recently.php">最近</a>]</p>';
      print '<p class="article_link">[<a href="search.php">検索</a>]</p>';
      print '<p class="article_link">[<a href="friend.php">友達</a>]</p>';
      print '<p class="article_link">[<a href="setting.php">設定</a>]</p>';
    ?>
    <div class="article">
      <h2>曲を検索する</h2>
    </div>
  </body>
</html>