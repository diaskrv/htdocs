<?php
 if($_COOKIE['user'] == ''):
   header('Location: login.php')
 ?>

<?php else: ?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>LABtops | Laptops advertisement webpage</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="style.css">
			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

	 <style type="text/css">
   ::placeholder{
     font-weight: 500px;
   }

   input{

   }

   label{
    color: white;
   }

   p{
    color: white;
   }

   li a{
    color: white;
   }

   h5{
    color: white;
   }

   .submittt{
    color: black;
    background-color: ;
   }
   .card.card-body{
    background-color: #1a1452;
   }

   .title{
   	color: white;
   }

  .commentaryi{
  border-radius: 5px;
  background: #0c092b;
  padding: 20px;
}
input[type=submit]:hover {
  background-color: #000000;
}
input[type=submit] {
  width: 100%;
  background-color: #1a1452;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


nav div ul li a{
  color: white;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center
}
</style>

<div class="header">
  <div class="container">
    <div class = "navbar">
      <div class="logo">
        <img src="assets/logo1.png">
      </div>
      <nav>
        <ul>
          <li><a href="welcome.php">Home</a></li>
          <li><a href="">Contacts</a></li>
          <li><p href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">Cart</p></li>
        </ul>
      </nav>
        <img src="assets/menu.png" class="menu-icon" style="width: 30px; height: 30px;" onclick="menutoggle">
    </div>
  </div>
</div>

<h2 class="title2">All Products</h2>
<?php
$sqlSelect = "SELECT * FROM products WHERE category='study' ORDER by id ASC";
$result = mysqli_query($conn, $sqlSelect);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result))
  {
?>
<div class="categories1">
  <div class="small-container">
    <div class="row">
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
    </div>
  </div>
</div>
<?php
  }
}
?>

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
                        <th scope="col">Quantityty</th>
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
                <button type="button" class="btn btn-primary">Order</button>
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
