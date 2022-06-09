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
    header("Location: adminProd.php");
    exit();
}
$product = $stmt->fetch();
?>

<?php include("inc/header.php") ?>
    <div class="container">
    <a href="adminProd.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "updated") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Updated</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_update") : ?>
        <div class="alert alert-dark" role="alert">
            <strong>Fail Update</strong>
        </div>
        <?php endif ?>
        <!-- Create Form -->
        <div class="card border-dark">
            <div class="card-header bg-dark text-white">
                <strong><i class="fa fa-plus"></i> Edit Product</strong>
            </div>
            <div class="card-body">
                <form action="update.php" method="post">
              </div>
                    <div class="form-row">
                      <input type="hidden" name="id" required value="<?= $product['id'] ?>">
                        <div class="form-group col-md-3">
                            <label for="barcode" class="col-form-label">Barcode</label>
                            <input type="number" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required value="<?= $product['barcode'] ?>">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="<?= $product['name'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required value="<?= $product['price'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qty" class="col-form-label">Quantity</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Quantity" required value="<?= $product['qty'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="brand" class="col-form-label">Brand</label>
                            <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand" required value="<?= $product['brand'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="category" class="col-form-label">Category</label>
                            <input type="text" class="form-control" name="category" id="category" placeholder="Category" required value="<?= $product['category'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL" required value="<?= $product['image'] ?>">
                        </div>
                    <div class="form-group col-md-12">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="3" class="form-control" placeholder="Description" required value="<?= $product['description'] ?>"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-left: 1020px; padding: 6px 20px 6px 20px;"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
<?php include("inc/footer.php") ?>
