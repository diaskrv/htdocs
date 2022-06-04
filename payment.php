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
                     'item_path'          =>     $_POST["hidden_path"],
                     'item_brand'          =>     $_POST["hidden_brand"],
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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>
    <link rel="stylesheet" href="stylepay.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Shopping Cart</h1>
        </div>
        <div class="container">
            <div class="grid">
                <div class="col-1">
                  <?php
                    if(!empty($_SESSION["shopping_cart"])) {
                      $total = 0;
                      foreach($_SESSION["shopping_cart"] as $keys => $values) {
                  ?>
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/pro1.png" alt="">
                            </div>
                            <div class="title">
                                <h3><?php echo $values["item_name"]; ?></h3>
                                <span><?php echo $values["item_brand"]; ?></span>
                                <div class="buttons">
                                  <span>Amount: <?php echo $values["item_qty"]; ?></span>
                                </div>
                                <a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$<?php echo $values["item_price"]; ?></h4>
                        </div>
                    </div>
                    <?php
                          }
                        }
                    ?>
                </div>

                <?php
                  if(!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                    $items_amount = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                <?php $values["item_name"]; ?>
                <?php $values["item_qty"]; ?>
                <?php $values["item_price"]; ?>

                <?php
                    $total = $total + ($values["item_qty"] * $values["item_price"]);
                    $items_amount = $items_amount + $values["item_qty"];
                    }
                ?>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products amount: <?php echo $items_amount; ?></label>
                                <span>Total price: <?php echo $total; ?></span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                        </ul>
                        <div id="paypal-payment-button">
                        </div>
                    </div>
                </div>
                      <?php
                        }
                      ?>
            </div>
        </div>
    </main>
    <script src="https://www.paypal.com/sdk/js?client-id=Ae1x7uKLtzsWsiC7GCSxqQlHOkB5vKuAfqpLf2-8SYxBcJcHADhmw4T_P3NMA7Lgfx-uGSI5AX7Vpx_b"></script>
    <script src="index1234.js"></script>
</body>
</html>
