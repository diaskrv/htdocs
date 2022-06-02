<?php
require("inc/db.php");

if ($_POST) {
    $barcode = trim($_POST['barcode']);
    $name    = trim($_POST['name']);
    $price   = (float) $_POST['price'];
    $qty     = (int) $_POST['qty'];
    $image   = trim($_POST['image']);
    $path   = trim($_POST['path']);
    $brand   = trim($_POST['brand']);
    $category   = trim($_POST['category']);
    $description = trim($_POST['description']);

    try {
        $sql = 'INSERT INTO products(id,barcode, name, price, qty, image, path, brand, category, description)
                VALUES(:id, :barcode, :name, :price, :qty, :image, :path, :brand, :category :description)';

        $stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
        $stmt->bindParam(":barcode", $barcode);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":qty", $qty);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":path", $path);
        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":description", $description);
        $stmt->execute();
        if ($stmt->rowCount()) {
            header("Location: create.php?status=created");
            exit();
        }
        header("Location: create.php?status=fail_create");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
} else {
    header("Location: create.php?status=fail_create");
    exit();
}
?>
