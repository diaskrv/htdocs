<?php
 if($_COOKIE['user'] == ''):
   header('Location: login.php')
 ?>

<?php else: ?>


<?php
  session_start();
  $conn = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');

  if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_qty'          =>     $_POST["qty"],
                     'item_price'          =>     $_POST["hidden_price"],

                );
                $_SESSION["shopping_cart"][$count] = $item_array;

                $sqlInsert = "INSERT INTO wishlist('w_id', 'name', 'price')
                VALUES('item_id','item_name', 'item_price')";

                $conn->commit();
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="allprod.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>window.location="allprod.php"</script>';
                }
           }
      }
 }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>All products | Laptops advertisement webpage</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="style.css">
			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
       <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <style type="text/css">
  body{
   background-image: linear-gradient(#000000, #06091e);
   font-family: Verdana, sans-serif;

  }
  .container {
  display: flex;
  align-items: center;
  justify-content: center
}

    nav ul li a{
      color: white;
    }
    div div div a h5{
      color: white;
    }

  </style>

  <div class="header">
		<div class="container">
			<div class = "navbar">
				<a href="welcome.php">
					<img src="../assets/logo1.png">
				</a>
				<nav>
					<ul>
						<li><a href="welcome.php">Home</a></li>
						<li><a href="Contacts.html">Contacts</a></li>
            <li><p href="" type="button" data-toggle="modal" data-target="#cart-modal" style="color: white">Cart</p></li>
					</ul>
				</nav>
					<img src="assets/menu.png" class="menu-icon" style="width: 30px; height: 30px;">
			</div>
		</div>
	</div>


<h2 class="title2">All Products</h2>
  <div class="categories1">
    <div class="small-container">
      <div class="row">
        <?php
          $sqlSelect = "SELECT * FROM products ORDER by  id ASC";
          $result = mysqli_query($conn, $sqlSelect);
          if(mysqli_num_rows($result) > 0)
          {
            while($row = mysqli_fetch_array($result))
            {
        ?>
        <div class="col-4">
          <form method="post" action="allprod.php?action=add&id=<?php echo $row["id"];?>">
          <a href="prodPage/<?php echo $row["path"];?>"><img src="assets/<?php echo $row["image"];?>" style="width: 230px; height: 230px;">
          <h5><?php echo $row["name"];?></h5></a>
          <input type="number" name="qty" value="1" style="background-color: #2a2f5e; border: none; color: #a6acde;">
          <p>$<?php echo $row["price"];?></p>
          <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
          <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
          <button class="button-57" role="button" type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn" value="Add to Cart"><span class="text">Add to cart</span><span>Click</span></button>
        </form>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>
  </div>
  <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" href="php/cart.php">Shopping cart</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <table class="table">
                      <thead>
                      <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                        if(!empty($_SESSION["shopping_cart"])) {
                          $total = 0;
                          foreach($_SESSION["shopping_cart"] as $keys => $values) {
                      ?>
                      <tr>
                          <td><a href="product.html"><?php echo $values["item_name"]; ?></a></td>
                          <td><?php echo $values["item_price"];?></td>
                          <td><?php echo $values["item_qty"]; ?></td>
                          <td style="color: red;"><a href="allprod.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                      </tr>
                      <?php
                          $total = $total + ($values["item_qty"] * $values["item_price"]);
                          }
                        }
                      ?>
                      <tr>
                          <td colspan="4" align="right">Total price: <br> $<?php echo $total; ?></td>
                      </tr>
                      </tbody>

                  </table>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="php/cart.php"><button type="button" class="btn btn-secondary">Go to cart</button></a>
                  <a href="payment.php"><button type="button" class="btn btn-primary">Order</button></a>
              </div>
          </div>
      </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

<?php endif; ?>
