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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
      <img src="../../assets/f_defendermaster.jpg" style="width: 85%;">
    </div>
    <div class="col-2">
      <h2>Defender Master</h2>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <p>Comfort seat with height adjustment. The landing system developed by ergonomics specialists will allow you not to experience discomfort even during long virtual battles. Thanks to its special design, tested in various conditions, it is suitable for both office and home use.</p>
        <br>
        <h5 style="color: #F4A460">Look for this product here:</h5>
        <a href="https://www.mechta.kz/product/igrovoe-kreslo-defender-master-red/"><p>Mechta</p></a>
        <a href="https://kaspi.kz/shop/p/igrovoe-kreslo-defender-master-krasnyi-101299047/?c=750000000"><p>Kaspi</p></a>
    </div>
    <div class="col-2">
        <button type="button" class="button-57" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 0 0 200px 100px; padding: 50px 100px 50px 100px;">
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
                <p style="color: black;">Wheel size, inch: 1.9</p>
                <p style="color: black;">Max load weight : 140kg</p>
                <p style="color: black;">Back: Flexible up to 135 degrees</p>
                <p style="color: black;">Armrests: yes, adjustable up and down</p>
                <p style="color: black;">Elevator: Gas lift class 3</p>
                <p style="color: black;">Case material: eco-leather</p>
                <p style="color: black;">Shipping weight (gross): 18.4kg</p>
                <p style="color: black;">Package dimensions (HxWxD): 82x65x32cm</p>
                <p style="color: black;">Device dimensions (HxWxD): 110-120x56x48cm</p>
                <p style="color: black;">Color: black with red</p>
                <p style="color: black;">Weight without packaging (net): 16kg</p>
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
  const comments_page_id = 13; // This number should be unique on every page
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
