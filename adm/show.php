<?php
require("inc/db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;

try {
    $sql = "SELECT * FROM products WHERE id = :id LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}

if (!$stmt->rowCount()) {
    header("Location: welcomeAdmin.php");
    exit();
}
$product = $stmt->fetch();

?>

<?php include("inc/header.php") ?>
    <div class="container">
        <a href="adminProd.php" class="btn btn-light mb-3"><< Go Back</a>
        <!-- Show  a Product -->
        <div class="card border-dark">
            <div class="card-header bg-dark text-white">
                <strong><i class="fa fa-database"></i> Show Product</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Barcode</th>
                                <td><?= $product['barcode'] ?></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td><?= $product['name'] ?></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>$<?= number_format($product['price'], 2) ?></td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td><?= $product['qty'] ?></td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td><?= $product['brand'] ?></td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td><?= $product['category'] ?></td>
                            </tr>
                            <tr>
                                <th>Descriptoin</th>
                                <td colspan="3"><?= $product['description'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Show a product -->
        <br>
    </div><!-- /.container -->
<?php include("inc/footer.php") ?>
