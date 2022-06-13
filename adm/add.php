<?php
$id = filter_var(trim($_POST['id']),
FILTER_SANITIZE_STRING);
$barcode = filter_var(trim($_POST['barcode']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']),
FILTER_SANITIZE_STRING);
$qty = filter_var(trim($_POST['qty']),
FILTER_SANITIZE_STRING);
$image = filter_var(trim($_POST['image']),
FILTER_SANITIZE_STRING);
$path = filter_var(trim($_POST['path']),
FILTER_SANITIZE_STRING);
$brand = filter_var(trim($_POST['brand']),
FILTER_SANITIZE_STRING);
$category = filter_var(trim($_POST['category']),
FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');
$user = $mysql->query("INSERT INTO `products` (`id` ,`barcode`, `name`, `description`, `price`, `image`, `qty`, `path`, `brand`, `category`)
VALUES('$id', '$barcode', '$name', '$description', '$price','$image','$qty', '$path','$brand','$category')");
$mysql->commit();
$result = $mysql->query("SELECT * from `products` WHERE `id` =
'$id' AND `name` = '$name'");
$user =$result->fetch_assoc();

$mysql->close();
header('Location: adminProd.php');
?>
