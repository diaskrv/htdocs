<?php
$username = filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$mail = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."dassda12564");
$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','ba1e484af256c7','95dbbe5d','heroku_ab7344589622e52');
$user = $mysql->query("INSERT INTO `users` (`username`, `mail`, `pass`)
VALUES('$username','$mail','$pass')");
$mysql->commit();
$result = $mysql->query("SELECT * from `users` WHERE `username` =
'$username' AND `pass` = '$pass'");
$user =$result->fetch_assoc();

setCookie('user', $user['username'], time() + 3600*24, "/");

$mysql->close();
header('Location: /index.php');

 ?>
