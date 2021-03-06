<?php
  session_start();
  $conn = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');

  if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], $_POST["hidden_id"]);
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
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                  $qtyqty=$values["item_qty"];
                  $idshnik=$_GET["id"];
                  mysqli_query($conn, "UPDATE products SET qty=qty+'$qtyqty' WHERE id='$idshnik'");
                  unset($_SESSION["shopping_cart"][$keys]);
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
    <title>WYW | Online advertisement-shopping center of el. devices</title>
    <link rel="stylesheet" href="../css/stylepay.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.png">
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
                                <img src="../assets/pro1.png" alt="">
                            </div>
                            <div class="title">
                                <h3><?php echo $values["item_name"]; ?></h3>
                                <span><?php echo $values["item_brand"]; ?> - <?php echo $values["item_category"]; ?></span>
                                <div class="buttons">
                                  <span>Amount: <?php echo $values["item_qty"]; ?></span>
                                </div>
                                <a href="payment.php?action=delete&id=<?php echo $values["item_id"]; ?>">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$<?php echo $values["item_price"]*$values["item_qty"]; ?></h4>
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
                <script>
                  let totalPrice = <?php echo $total ?>;
                </script>
                <script src="index1234.js"></script>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Purchase Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products amount: <?php echo $items_amount; ?> items</label>
                                <span>Total price: $<?php echo $total; ?></span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : Free</label>
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
    <script src="../js/index1234.js"></script>
    <script src="https://v2.txt.me/livechat/js/wrapper/cf93366e68d54998a033909344bfd8de" async></script>
</body>
</html>
