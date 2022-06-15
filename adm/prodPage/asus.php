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
			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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


</style>

<div class="header">
  <div class="container">
    <div class = "navbar">
      <nav>
        <ul>
          <li><a href="../welcomeAdmin.php" style="font-size: 20px;">Home</a></li>
          <li><a href="../Contacts.html" style="font-size: 20px;">Contacts</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

  <div class="row1">
    <div class="col-2">
      <img src="../../assets/f_asus.png">
    </div>
    <div class="col-2">
      <h2>ASUS ROG STRIX G15 G513IH</h2>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <p>The ROG Matrix G15 laptop is endowed with all the functions necessary for a comfortable game and productive work. Its powerful hardware configuration, which includes a Risen 9 processor and a GeForce RTX 3050ti graphics card, allows you to show all its advantages to a magnificent display with excellent speed characteristics. The stable operation of the components is guaranteed by an intelligent cooling system, and a highly efficient liquid metal is used as the thermal interface of the central processor.</p>
        <br>
        <h5 style="color: #F4A460">Look for this product here:</h5>
        <a href="https://alfa.kz/pc/notebooks/noutbuk/asus/rog_strix_g15_g513ie_hn012"><p>ALFA</p></a>
        <a href="https://www.sulpak.kz/g/noutbuk_asus_rog_strix_g15_g513q_r9161tsgn_90nr0562_m01180#reviewTab"><p>Sulpak</p></a>
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
                <p style="color: black;">Display: 15.6 ", 1920x1080px</p>
                <p style="color: black;">Processor: Ryzen 7, 2.9G Hz</p>
                <p style="color: black;">Video card model: NVIDIA FeForce RTX 3050 Ti</p>
                <p style="color: black;">RAM: 8 GB</p>
                <p style="color: black;">Storage: HDD/SSD, 512 GB</p>
                <p style="color: black;">OS: DOS</p>
                <p style="color: black;">Battery capacity: 56W*h</p>
                <p style="color: black;">Laptop weight: 2.1 kg</p>
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
  const comments_page_id = 1; // This number should be unique on every page
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
