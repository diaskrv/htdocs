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

.container {
  display: flex;
  align-items: center;
  justify-content: center
}
</style>

<div class="header">
  <div class="container">
    <div class = "navbar">
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
      <img src="../../assets/f_apple.png" style="width: 90%;">
    </div>
    <div class="col-2">
      <h2>Apple Macbook Pro M1 13 Z11B000EM</h2>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <p>The 13-inch MacBook Pro 2020 is an example of a perfectly balanced laptop. With a small size, it combines an excellent screen, high performance, and unattainable autonomy for competitors. At the same time, the weight of the laptop is only 1.4 kg. Apple's transition to its own processors has become, without exaggeration, one of the main sensations of 2020.</p>
        <br>
        <h5 style="color: #F4A460">Look for this product here:</h5>
        <a href="https://astana.alfa.kz/pc/notebooks/ultrabuk/apple/macbook_pro_13_m1__2020__custom"><p>ALFA</p></a>
        <a href="https://ipoint.kz/mac/macbook-pro/macbook-pro-13-s-touch-bar-16-gb-2-tb-apple-m1-seryy-kosmos-z11c00031"><p>iPoint</p></a>
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
            <p>Display: 13.3 ", 2560x1600 (16:10)</p>
            <p>Processor: Apple M1, 3.2 GHz</p>
            <p>RAM: 16 GB</p>
            <p>Storage: SSD, 512 GB</p>
            <p>OS: MacOS</p>
            <p>Battery capacity: 58W*h</p>
            <p>Laptop weight: 1.4 kg</p>
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
  const comments_page_id = 10; // This number should be unique on every page
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
