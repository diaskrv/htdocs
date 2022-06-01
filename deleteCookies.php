<?php
$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');

$result = $mysql->query("SELECT * from `users` WHERE `username` =
'$username' AND `pass` = '$pass'");
$user =$result->fetch_assoc();

if($user == ''){
  echo "такой пользователь не найден";
  exit();
}

setCookie('user', $user['username'], time() - 3600*24, "/")
?>
