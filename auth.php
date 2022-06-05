<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$username = filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."dassda12564");

$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');

$result = $mysql->query("SELECT * from `users` WHERE `username` =
'$username' AND `pass` = '$pass'");
$user =$result->fetch_assoc();

if($user == ''){
  echo "такой пользователь не найден";
  exit();
}

setCookie('user', $user['username'], time() + 3600*24, "/");


print_r($user);
if($user['username'] == 'neznaakomec'){
  header('Location: /welcomeAdmin.php');
}else{
  header('Location: /welcome.php');
}
$mysql->close();
exit();
?>
