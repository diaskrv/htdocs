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
            <li><a href="../welcomeAdmin.php" style="font-size: 20px;">Home</a></li>
            <li><a href="../Contacts.html" style="font-size: 20px;">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <img src="../../assets/f_beyer.png" style="width: 80%;">
    </div>
    <div class="col-2">
      <h2>Beyerdynamic DT 240 Pro</h2>
    </div>
  </div>

  <div class="row1">
    <div class="col-2">
      <p>Beyerdynamic DT 240 PRO are full-size dynamic headphones with natural sound. Suitable for listening to music from any device, as the headphones are not demanding on the source (34 ohms). And they do a good job with the role of budget monitor headphones for working with sound.</p>
        <br>
        <h5 style="color: #F4A460">Look for this product here:</h5>
        <a href="https://https://yam.kz/naushniki-i-garnitury/naushniki-dlya-doma/dt-240-pro-34/"><p>YAM</p></a>
        <a href="https://https://www.1music.kz/product/nakladnye-naushniki-beyerdynamic-dt-240-pro/"><p>1Music</p></a>
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
                <p style="color: black;">Type: dynamic, overhead</p>
                <p style="color: black;">Category: wired</p>
                <p style="color: black;">Frequency range: 5 Hz - 35 kHz</p>
                <p style="color: black;">Emitter: dynamic 35 mm</p>
                <p style="color: black;">Case material: plastic + metal</p>
                <p style="color: black;">Resistance: 34 Ohm</p>
                <p style="color: black;">Sensitivity: 99 dB</p>
                <p style="color: black;">Fastening type: headband</p>
                <p style="color: black;">Harmonic coefficient: less than 0.1%</p>
                <p style="color: black;">Maximum input power: 100 mW</p>
                <p style="color: black;">Cable: Detachable, 3.5 mm mini-jack connector, (adapter for 6.3 mm jacks included)</p>
                <p style="color: black;">Weight: 196 g. </p>
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
  const comments_page_id = 648; // This number should be unique on every page
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
