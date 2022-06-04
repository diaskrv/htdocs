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
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>window.location="allprod.php"</script>';
                }
           }
      }
 }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TRUST US YOUR PREFERENCES!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">

    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="HOME.css" media="screen">
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900">

    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">

    <title>Laptops advertisement website</title>

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

    <style>
     #map {
       height: 500px;
       width: 900px;
       margin-right: 200px;
       margin-top: 30px;
       margin-left: 250px;
       margin-bottom: 100px;
       border: 3px;
       border-radius: 25px;
       box-shadow: 10px 15px 5px #7FFFD4;
     }

     .container8 {
       margin-top: 100px;
       padding: 32px;
     }

     .select-box {
       position: relative;
       display: flex;
       width: 400px;
       flex-direction: column;
     }

     .select-box .options-container {
       background: #2f3640;
       color: #f5f6fa;
       max-height: 0;
       width: 100%;
       opacity: 0;
       transition: all 0.4s;
       border-radius: 8px;
       overflow: hidden;

       order: 1;
     }

     .selected {
       background: #2f3640;
       border-radius: 8px;
       margin-bottom: 8px;
       color: #f5f6fa;
       position: relative;

       order: 0;
     }

     .selected::after {
       content: "";
       background: url("assets/arrow-down.svg");
       background-size: contain;
       background-repeat: no-repeat;

       position: absolute;
       height: 100%;
       width: 32px;
       right: 10px;
       top: 5px;

       transition: all 0.4s;
     }

     .select-box .options-container.active {
       max-height: 240px;
       opacity: 1;
       overflow-y: scroll;
       margin-top: 54px;
     }

     .select-box .options-container.active + .selected::after {
       transform: rotateX(180deg);
       top: -6px;
     }

     .select-box .options-container::-webkit-scrollbar {
       width: 8px;
       background: #0d141f;
       border-radius: 0 8px 8px 0;
     }

     .select-box .options-container::-webkit-scrollbar-thumb {
       background: #525861;
       border-radius: 0 8px 8px 0;
     }

     .select-box .option,
     .selected {
       padding: 12px 24px;
       cursor: pointer;
     }

     .select-box .option:hover {
       background: #414b57;
     }

     .select-box label {
       cursor: pointer;
     }

     .select-box .option .radio {
       display: none;
     }

     /* Searchbox */

     .search-box input {
       width: 100%;
       padding: 12px 16px;
       font-family: "Roboto", sans-serif;
       font-size: 16px;
       position: absolute;
       border-radius: 8px 8px 0 0;
       z-index: 100;
       border: 8px solid #2f3640;

       opacity: 0;
       pointer-events: none;
       transition: all 0.4s;
     }

     .search-box input:focus {
       outline: none;
     }

     .select-box .options-container.active ~ .search-box input {
       opacity: 1;
       pointer-events: auto;
     }
     .u-clearfix.u-image.u-section-1 {
      background-image: url("assets/background.png");
     }
     h5{
      color: white;
     }
     .categories1.small-container.row{
      margin-bottom: 500px;
      padding-bottom: 5000px;
     }

     .u-image.u-logo.u-image-1{
      width: 15%;

     }
   </style>

    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">
  </head>




  <body class="u-body u-xl-mode">

    <script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

<style type="text/css">
/* Popup container */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 250px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;

  margin-left: -160px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}


@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>


    <header class="u-black u-clearfix u-header u-header" id="sec-adc2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <form action="cabinet.php" method = "post">
            <a href="index.php" class="u-image u-logo u-image-1" data-image-width="690" data-image-height="388">
              <img src="assets/ezgif.com-gif-maker.gif" class="u-logo-image u-logo-image-1" style="width: 100%;">
            </a>
            <a href="HOME.php" data-page-id="333829213" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">
              <br>
            </a>

            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-0 u-unstyled u-nav-1">
                  <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="welcome.php" style="padding: 0px 20px;">HOME</a></li>
                  <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="Contacts.html" style="padding: 0px 20px;">Contacts</a></li>
                  <li class="u-nav-item"><div class="popup" onclick="myFunction()">Account
                  <span class="popuptext" id="myPopup">
                <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="accountpage.php" style="padding: 0px 20px;">My profile</a>
                <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="login.php" style="padding: 0px 20px;">Login</a><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="rega.php" style="padding: 0px 20px;">Registration</a>
                <form action="deleteCookies.php" method="post">
                  <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="login.php" style="padding: 0px 20px;">Logout</a>
                </form>
                </li>
                  </span>
                </div>
                  <li><p type="button" data-toggle="modal" data-target="#cart-modal" style="color: white">Cart</p></li>
              </ul>
            </div>
            </nav>

          
      </div>
    </header>



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
