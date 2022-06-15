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
                echo '<script>window.location="cart.php"</script>';
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
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TRUST US YOUR PREFERENCES!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">

    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/HOME.css" media="screen">
    <link rel="stylesheet" href="../css/style.css" media="screen">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.png">

    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">

    <title>WYW | Online advertisement-shopping center of el. devices</title>

    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">
  </head>

  <body class="u-body u-xl-mode">
    <header class="u-black u-clearfix u-header u-header" id="sec-adc2">
      <div class="u-clearfix u-sheet u-sheet-1">

        <a href="" class="u-image u-logo u-image-1" data-image-width="690" data-image-height="388">
          <img src="../assets/ezgif.com-gif-maker.gif" class="u-logo-image u-logo-image-1">
        </a>
        <a href="HOME.php" data-page-id="333829213" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">
          <br>
        </a>

        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="welcome.php" style="padding: 0px 20px;">HOME</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="allprod.php" style="padding: 0px 20px;">Products</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="Contacts.html" style="padding: 0px 20px;">Contacts</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="accountpage.php" style="padding: 0px 20px;">Account</a></li>
            </ul>
          </div>

          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="welcome.php.php">HOME</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contacts.html">Contacts</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="accountpage.php">Account</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="container text-white">
        <h2 class='text-center text-white'>My cart</h2>

        <table class="table table-bordered">
          <tr>
            <th width="40%" style="color: white;">Item name</th>
            <th width="10%" style="color: white;">Quantity</th>
            <th width="10%" style="color: white;">Price</th>
            <th width="5%" style="color: white;">Action</th>
          </tr>
      <?php
        if(!empty($_SESSION["shopping_cart"])) {
          $total = 0;
          foreach($_SESSION["shopping_cart"] as $keys => $values) {
      ?>
          <tr>
            <td style="color: white;"><?php echo $values["item_name"]; ?></td>
            <td style="color: white;"><?php echo $values["item_qty"]; ?></td>
            <td style="color: white;"><?php echo $values["item_price"]; ?></td>
            <td style="color: red;"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
      <?php
          $total = $total + ($values["item_qty"] * $values["item_price"]);
          }
      ?>
      <tr>
          <td colspan="4" align="right" style="color: white;">Total price: <br> $<?php echo $total; ?></td>
      </tr>

      <?php
        }
      ?>
        </table>
    </div>
    <script src="https://v2.txt.me/livechat/js/wrapper/cf93366e68d54998a033909344bfd8de" async></script>
  </body>
</html>
