<?php
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
$user = $mysql->query("INSERT INTO `products` (`barcode`, `name`, `description`, `price`, `image`, `qty`, `productPath`, `brand`, `category`)
VALUES('$barcode','$name', '$description', '$price','$image','$qty', '$path','$brand','$category')");
$mysql->commit();

$mysql->close();
header('Location: /adminProd.php');
?>
