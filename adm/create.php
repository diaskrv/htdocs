<?php include("inc/header.php") ?>
    <div class="container">
        <a href="adminProd.php" class="btn btn-light mb-3"><< Go Back</a>
        <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Created</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
        <!-- Create Form -->
        <div class="card border-dark">
            <div class="card-header bg-dark text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card-body">
                <form action="add.php" method="post">
              </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                          <label for="category" class="col-form-label">ID</label>
                          <input type="number" class="form-control" name="id" id="id" placeholder="ID">
                      </div>
                        <div class="form-group col-md-3">
                            <label for="barcode" class="col-form-label">Barcode</label>
                            <input type="number" class="form-control" id="barcode" name="barcode" placeholder="Barcode">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qty" class="col-form-label">Quantity</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Quantity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="path" class="col-form-label">Path</label>
                            <input type="text" class="form-control" name="path" id="path" placeholder="Path url">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="brand" class="col-form-label">Brand</label>
                            <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category" class="col-form-label">Category</label>
                            <input type="text" class="form-control" name="category" id="category" placeholder="Category">
                        </div>
                    <div class="form-group col-md-12">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="3" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-left: 1020px; padding: 6px 20px 6px 20px;"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
    <script src="https://v2.txt.me/livechat/js/wrapper/cf93366e68d54998a033909344bfd8de" async></script>
<?php include("inc/footer.php") ?>
