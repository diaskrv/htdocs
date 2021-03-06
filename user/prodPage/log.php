<?php
 if($_COOKIE['user'] == ''):
   header('Location: ../login.php')
 ?>

<?php else: ?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>WYW | Online advertisement-shopping center of el. devices</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="comments.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.png">
</head>
<body>
<style type="text/css">
html, body{
  height: 100%;
}
 body{
    margin: 0;
    background: linear-gradient(45deg, #240459, #1d0c38, #321a3d, #2b1a33, #000, #634c6e);
    background-size: 400% 400%;
    animation: gradient 10s ease infinite;
 }
 @keyframes gradient{
   0%{
     background-position: 0 50%;
   }
   50%{
     background-position: 100% 50%;
   }
   100%{
     background-position: 0 50%;
   }
 }
   ::placeholder{
     font-weight: 500px;
   }
.container {
  display: flex;
  align-items: center;
  justify-content: center
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

   h2{
    color: white;
   }

   .submittt{
    color: black;
    background-color: ;
   }
   .card.card-body{
    background-color: #1a1452;
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

</style>

<div class="header">
  <div class="container">
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="../welcome.php" style="font-size: 20px;">Home</a></li>
          <li><a href="../Contacts.html" style="font-size: 20px;">Contacts</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

  <div class="row1">
    <div class="col-2">
      <img src="../../assets/f_log.png" style="width: 85%;">
    </div>
    <div class="col-2">
      <h2>Logitech G102</h2>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <p>Logitech G102 is not the largest symmetrical mouse, designed for the right hand, judging by the location of the side buttons. The weight of the mouse is 85 grams without cable (for G Pro it is 83 grams), with cable it is not specified. Alas. It feels like around 115 grams (while the G Pro has 130 according to the specification). The dimensions of the mouse are exactly the same as those of the G Pro (in mm): 117 x 62 x 38. Under the main buttons are Omron switches for 10 million clicks (according to the manufacturer), inside there is a new optical infrared sensor marked "Mercury ". The mouse is fully supported by Logitech Gaming Software and has single-zone RGB lighting.</p>
        <br>
        <h5 style="color: #F4A460">Look for this product here:</h5>
        <a href="https://www.technodom.kz/p/myshka-igrovaya-usb-logitech-g102-white-219498?utm_source=google&utm_medium=cpc&utm_campaign=google-search-td-dm-shopping-feed-smartcampaign-exp&gclid=Cj0KCQiA09eQBhCxARIsAAYRiymzt7Q_dZAcuBnk-xCbo8M-JwUOVIE2PZI1f8z08qlliDQX4in4z8saAp4HEALw_wcB"><p>Technodom</p></a>
        <a href="https://https://shop.kz/offer/mysh-logitech-g102-lightsync-black-usb/?gclid=Cj0KCQiA09eQBhCxARIsAAYRiylWDZSrU58upfWID07c8H8YZXI3GX_9hunPzGeCUtwmijAC9anWJlkaAoEFEALw_wcB"><p>?????????? ??????????</p></a>
    </div>
    <div class="col-2">
        <button type="button" class="button-57" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 0 0 300px 100px; padding: 50px 100px 50px 100px;">
          <span>Characteristics</span><span>Click</span>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product's details:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p style="color: black;">Length: 116.6mm</p>
                <p style="color: black;">Width: 62.15mm</p>
                <p style="color: black;">Thickness: 38.2mm</p>
                <p style="color: black;">Weight: 85g (mouse only)</p>
                <p style="color: black;">Cable length: 2.10 m</p>
                <p style="color: black;">Sensitivity: 200-8000dpi</p>
                <p style="color: black;">Zero anti-aliasing, filtering and acceleration</p>
                <p style="color: black;">Max. acceleration: > 25 G2Tested on Logitech G240 Gaming Mouse Pad</p>
                <p style="color: black;">Max. Speed: > 5.08 m/s (200 in/s)3Tested on Logitech G240 Gaming Mouse Pad</p>
                <p style="color: black;">USB data format: 16 bits per axis</p>
                <p style="color: black;">USB port polling rate: 1000Hz (1ms)</p>
                <p style="color: black;">Microprocessor: 32-bit ARM processor</p>
                <p style="color: black;">Built-in storage: 1 profile</p>
                <p style="color: black;">LIGHTSYNC RGB: 1 zone</p>
                <p style="color: black;">Cable without braid</p>
                <p style="color: black;">Mechanical buttons with spring mechanism</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
  <style type="text/css">
    .comments{
      width: 50%;
      padding-left: 350px;
      color: white;
    }
  </style>
  </body>
  <div class="comments"></div>

  <script>
  const comments_page_id = 12; // This number should be unique on every page
  fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
  	document.querySelector(".comments").innerHTML = data;
  	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
  		element.onclick = event => {
  			event.preventDefault();
  			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
  			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
  			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
  		};
  	});
  	document.querySelectorAll(".comments .write_comment form").forEach(element => {
  		element.onsubmit = event => {
  			event.preventDefault();
  			fetch("comments.php?page_id=" + comments_page_id, {
  				method: 'POST',
  				body: new FormData(element)
  			}).then(response => response.text()).then(data => {
  				element.parentElement.innerHTML = data;
  			});
  		};
  	});
  });
  </script>
</html>

<?php endif; ?>
