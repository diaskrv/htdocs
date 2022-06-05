<?php
 if($_COOKIE['user'] == ''):
   header('Location: login.php')
 ?>

<?php else: ?>


<?php
  session_start();
  $conn = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');
  $sqlSelect = "SELECT * FROM products ORDER by id ASC";

  if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"])){
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_qty'          =>     $_POST["qty"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_path'          =>     $_POST["hidden_path"],
                     'item_brand'          =>     $_POST["hidden_brand"],
                     'item_category'          =>     $_POST["hidden_category"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
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
      $itemQty=$_POST['qty'];
      $itemID=$_POST['hidden_id'];
      mysqli_query($conn, "UPDATE products SET qty=qty-'$itemQty' WHERE id='$itemID'");
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
       <link rel="stylesheet" type="text/css" href="nicepage.css">
			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
       <link rel="stylesheet" href="assets/css/main.css">

       <script src="jquery.js"></script>
       <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
       <script src="js/main.js"></script>
</head>
<body>
  <style type="text/css">
  body{
   background-image: black;
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
				<nav>
					<ul>
						<li><a href="welcome.php" style="font-size: 20px;">Home</a></li>
						<li><a href="Contacts.html" style="font-size: 20px;">Contacts</a></li>
            <li><p type="button" data-toggle="modal" data-target="#cart-modal" style="color: white; font-size: 20px;">Cart</p></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

<br>

  <h2 class="title2">All Products</h2>

  <div class="popup" onclick="myFunction()">
    <span class="popuptext" id="myPopup">
      Sort by
               <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="allprod.php"><button>By default</button></a>
               <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="allprodBrand.php"><button>By brand</button></a>
               <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="allprodPriceAsc.php"><button>Price(Ascending)</button></a>
               <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="allprodPriceDesc.php"><button>Price(Descending)</button></a>
    </span>
  </div>

  <div class="categories1">
    <div class="small-container">
      <div class="row">
        <?php
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
            <input type="hidden" name="hidden_path" value="<?php echo $row["path"];?>">
            <input type="hidden" name="hidden_brand" value="<?php echo $row["brand"];?>">
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
            <input type="hidden" name="hidden_category" value="<?php echo $row["category"];?>">
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
                  <h5 class="modal-title" id="exampleModalLabel">Shopping cart</h5>
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
                          <td><a href=<?php $values["item_path"]; ?>><?php echo $values["item_name"]; ?></a></td>
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
                  <a href="php/cart.php"><button type="button" class="button-57" style="margin-top: 5px;" class="btn"><span class="text">Go to cart</span><span class="text">Go to cart</span></button></a>
                  <a href="payment.php"><button type="button" class="button-57" style="margin-top: 5px;" class="btn"><span class="text">Order</span><span class="text">Order</span></button></a>
              </div>
          </div>
      </div>
  </div>
</body>
</html>

<?php endif; ?>
