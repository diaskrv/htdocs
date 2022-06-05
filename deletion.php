<?php
$id = ($_POST['hide_id']);
$qty = ($_POST['hide_qty']);

$mysql = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');
$user = $mysql->query("UPDATE products SET qty=qty+'$qty' WHERE id='$id'");
$mysql->commit();
$result = $mysql->query("SELECT * from `products` WHERE `id` =
'$id' AND `name` = '$name'");
$user =$result->fetch_assoc();

$mysql->close();
?>
