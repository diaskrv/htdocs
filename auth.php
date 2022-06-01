<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$username = filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."dassda12564");

$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','ba1e484af256c7','95dbbe5d','heroku_ab7344589622e52');

$result = $mysql->query("SELECT * from `users` WHERE `username` =
'$username' AND `pass` = '$pass'");
$user =$result->fetch_assoc();

if($user == ''){
  echo "такой пользователь не найден";
  exit();
}

setCookie('user', $user['username'], time() + 3600*24, "/");


print_r($user);
$mysql->close();
header('Location: /index.php');
exit();
?>
