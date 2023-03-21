<html>
<head>
<title>userbook</title> <meta charset="UTF-8">
</head>
<body>

<h1> ユーザーリスト </h1>

<table border=0 cellpadding=0 cellspacing=0>
<tr bgcolor=#f87820>
<td width=50><br>No</td>
<td width=80><br><b>ユーザー名</b></td>
<td width=80><br><b>パスワード</b></td>
</tr>

<?php
if(isset($_GET['id'])) 	      $id=$_GET['id']; 
if(isset($_GET['username']))  $username=$_GET['username']; 
if(isset($_GET['password']))  $password=$_GET['password']; 

$db = new PDO("sqlite:munet.sqlite");
if(isset($username))	{
	$db->query("INSERT INTO user VALUES(null, '$username','$password')");
}
if(isset($id))	{
	$db->query("DELETE FROM user WHERE id='$id'");
}
if(isset($username) && isset($password))	{
	$db->query("DELETE FROM user WHERE username='$username'");
}

$result=$db->query("SELECT * FROM user");
	for($i = 0; $row=$result->fetch(); ++$i ){
		echo "<tr valign=center>";
		echo "<td >". $row['id']. "</td>";
		echo "<td >". $row['username']. "</td>";
		echo "<td >". $row['password']. "</td>";
		echo "</tr>";
	}
?>
<tr> <td bgcolor=#fb7922 colspan=6>&nbsp</td> </tr>
</table>

<h2>ユーザー追加</h2>
<form action=userbook.php method=get>
<table border=0 cellpadding=0 cellspacing=0>
 <tr><td>ユーザー名:</td><td><input type=text size=20 name=username></td></tr>
 <tr><td>パスワード:</td><td> <input type=text size=20 name=password></td></tr>
 <tr><td> </td><td><input type=submit border=0 value="追加"></td></tr>
</table>
</form>

<h2>ユーザー削除</h2>
<form action=userbook.php method=get>
<table border=0 cellpadding=0 cellspacing=0>
 <tr><td>ID:</td><td><input type=text size=20 name=id></td></tr>
 <tr><td> </td><td><input type=submit border=0 value="削除"></td></tr>
</table>
</form>

<h2>ユーザー削除</h2>
<form action=userbook.php method=get>
<table border=0 cellpadding=0 cellspacing=0>
 <tr><td>ユーザー名:</td><td><input type=text size=20 name=username></td></tr>
 <tr><td>パスワード:</td><td><input type=text size=20 name=password></td></tr>
 <tr><td> </td><td><input type=submit border=0 value="削除"></td></tr>
</table>
</form>

</body>
</html>