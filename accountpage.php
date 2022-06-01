<?php
 if($_COOKIE['user'] == ''):
   header('Location: login.php')
 ?>

<?php else: ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/profile.css">
</head>
<body>
  <div class="container">
    <div class="main">
      <div class="topbar">
        <a href="index.php">Log out</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mt-1">
        <div class="card text-center sidebar">
          <div class="card-body">
            <img src="images/profilePic.jpg" class="rounded-circle" width="150">
            <div class="mt-3">
              <h3>Name Surname</h3>
              <a href="index.php">Home</a>
              <a href="Contacts.html">Contacts</a>
              <a href="accedit.php">Edit</a>
            </div>
          </div>
        </div>

        <div class="col-md-8 mt-1">
          <div class="card mb-3 content">
            <h1 class="m-3 pt-3">About</h1>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <h5>

<?php
     if($_COOKIE['user'] == true):
     ?>
     <div class = "greeting-container">
       <p style = "font-size: 20px;">
         <?php echo $_COOKIE['user'];
         session_start();

         $counter = $_COOKIE["counter"];
         if (!isSet($counter))
         $counter = date('Y-m-d H:i:s', strtotime("+6 hours"));
         else
         $counter = $counter;
         ?>
         <?php
         echo $counter;

          ?>
       </p>
     </div>
    <?php endif; ?>

                  </h5>
                </div>
              </div>

              <hr>
              <div class="row">
                <div class="col-md-3">
                  <h5>

                  </h5>
                </div>
                <div class="col-md-9 text-secondary">

<?php
     if($_COOKIE['users'] == true):
     ?>
     <div class = "greeting-container">
       <p style = "font-size: 20px;">
         <?php echo $_COOKIE['mail'];

         session_start();

         $counter = $_COOKIE["counter"];
         if (!isSet($counter))
         $counter = date('Y-m-d H:i:s', strtotime("+6 hours"));
         else
         $counter = $counter;
         ?>
         <?php
         echo $counter;

          ?>
       </p>
     </div>
    <?php endif; ?>

                </div>
              </div>

              <hr>
              <div class="row">
                <div class="col-md-3">
                  <h5>Phone</h5>
                </div>
                <div class="col-md-9 text-secondary">
                   8 777 77 77
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <h5>Address</h5>
                </div>
                <div class="col-md-9 text-secondary">
                   Mangilik el Street
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <script type="text/javascript">
      const selected = document.querySelector(".selected");
      const optionsContainer = document.querySelector(".options-container");
      const searchBox = document.querySelector(".search-box input");
      const optionsList = document.querySelectorAll(".option");
      selected.addEventListener("click", () => {
      optionsContainer.classList.toggle("active");
      searchBox.value = "";
      filterList("");
      if (optionsContainer.classList.contains("active")) {
        searchBox.focus();
      }
    });
      optionsList.forEach(o => {
        o.addEventListener("click", () => {
          selected.innerHTML = o.querySelector("label").innerHTML;
          optionsContainer.classList.remove("active");
        });
      });
      searchBox.addEventListener("keyup", function(e) {
        filterList(e.target.value);
        });
        const filterList = searchTerm => {
          searchTerm = searchTerm.toLowerCase();
          optionsList.forEach(option => {
          let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
            if (label.indexOf(searchTerm) != -1) {
              option.style.display = "block";
              } else {
                option.style.display = "none";
              }
          });
        };
      </script>
</body>

<?php endif; ?>
