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
       <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="comments.css" rel="stylesheet" type="text/css">
</head>
<body>
<style type="text/css">
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
   <div class = "navbar">
    <a href="../welcome.php" class="logo">
     <img src="../assets/logo1.png">
    </a>
    <nav>
     <ul>
      <li><a href="../welcome.php">Home</a></li>
      <li><a href="../Contacts.html">Contacts</a></li>
     </ul>
    </nav>
     </div>
  </div>
 </div>

  <div class="row1">
    <div class="col-2">
      <img src="../assets/f_hpVictus.jpg" style="width: 90%;">
    </div>
    <div class="col-2">
      <h2>HP Victus 16-e0010ur</h2>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <p>HP's 16.1-inch Victus laptop is equipped with an AMD processor and has all the features you need for both gaming and everyday tasks. Expand your gaming experience with this all-in-one gaming keyboard and enjoy high-quality screens with high refresh rates.</p>
        <br>
        <h5 style="color: #F4A460">Look for this product here:</h5>
        <a href="https://shop.kz/offer/noutbuk-hp-victus-16-e0010ur-489h3ea/"><p>Белый Ветер</p></a>
        <a href="https://www.technodom.kz/p/igrovoj-noutbuk-hp-victus-16-e0010ur-489h3ea-253388"><p>Technodom</p></a>
    </div>
    <div class="col-2">
      <h1>
        <button class="buttonn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
          Characteristics
        </button>
      </h1>
      <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
          <div class="card card-body" style="width: 300px;">
            <p>Processor: AMD Ryzen 5</p>
            <p>Processor Model: 5600H</p>
            <p>Processor frequency, GHz: 3.3</p>
            <p>RAM: 16 GB</p>
            <p>RAM configuration: 2 x 8 GB</p>
            <p>Hard Disk: No HDD</p>
            <p>Solid State Drive: 512 GB SSD</p>
            <p>Processor Integrated Graphics: AMD Radeon Graphics</p>
            <p>Discrete Graphics Card Model: GeForce RTX 3050</p>
            <p>Screen diagonal, inch: 16.1</p>
            <p>Screen Resolution: 1920 x 1080 Full HD</p>
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
  const comments_page_id = 8767; // This number should be unique on every page
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
