
<?php
 if($_COOKIE['user'] == ''):
   header('Location: ../login.php')
 ?>

<?php else: ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>WYW | Online advertisement-shopping center of el. devices</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/HOME.css" media="screen">
    <link rel="stylesheet" href="../css/style.css" media="screen">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.png">

    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
		    "@context": "http://schema.org",
		    "@type": "Organization",
		    "name": "",
		    "logo": "../assets/ezgif.com-gif-maker.gif"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About Us">
    <meta property="og:type" content="website">
  </head>

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

  <body class="u-body u-xl-mode">
  <header class="u-black u-clearfix u-header u-header" id="sec-adc2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="welcome.php" class="u-image u-logo u-image-1" data-image-width="690" data-image-height="388">
          <img src="../assets/ezgif.com-gif-maker.gif" class="u-logo-image u-logo-image-1" style="width: 100%;">
        </a>
        <a href="HOME.php" data-page-id="333829213" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">
          <br>
        </a>

        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="welcome.php" style="padding: 0px 20px;">Home</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="Contacts.html" style="padding: 0px 20px;">Contacts</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="accedit.php" style="padding: 0px 20px;">Edit</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <section class="u-backlink u-clearfix u-grey-80">
       <img src="../assets/profilePic.jpg" class="rounded-circle" style="width: 15%; border-radius: 50%;">
       <br>
       <?php
        $conn = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');
        $userUsername=$_COOKIE['user'];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$userUsername'");
        while($row = mysqli_fetch_array($result)) {
       ?>

       <p style="font-size: 30px; text-align: center;">Username:
        <?php
          if($_COOKIE['user'] == true):
        ?>
        <?php echo $_COOKIE['user'];
         session_start();
        ?>
        <?php endif; ?>
       </p>
        <br>
       <p style="font-size: 30px; text-align: center;"> Email: <?php echo $row['mail']; ?>
       </p>
       <br>
       <p style="font-size: 30px; text-align: center;"> First name: <?php
        if(is_null($row['name'])){
          ?> <a href="accedit.php" class="hrefs">Click here to add information.</a>
        <?php
        }else{
          echo $row['name'];
        }?>
       </p>
       <br>
       <p style="font-size: 30px; text-align: center;"> Last name: <?php
        if(is_null($row['surname'])){
          ?> <a href="accedit.php" class="hrefs">Click here to add information.</a>
        <?php
        }else{
          echo $row['surname'];
        }?>
       </p>
       <br>
       <p style="font-size: 30px; text-align: center;"> Phone number: <?php
        if(is_null($row['phone'])){
          ?> <a href="accedit.php" class="hrefs">Click here to add information.</a>
        <?php
        }else{
          echo $row['phone'];
        }?>
       </p>
       <?php
        }
       ?>
    </section>
    <script src="https://v2.txt.me/livechat/js/wrapper/cf93366e68d54998a033909344bfd8de" async></script>
  </body>

</html>

<?php endif; ?>
