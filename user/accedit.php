<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WYW | Online advertisement-shopping center of el. devices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.png">
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
        /* background-image: radial-gradient(circle, #0b111c, #07152c, #00173b, #00184b, #001859); */
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
     label{
         color:white;
     }
 </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                                <div class="row">
                  <div class="col-md-4 mt-1" style="padding-top:50px;">
              <a href="accountpage.php" style="text-decoration: none;">
                    <div class="card text-center sidebar" href="../accountpage.php" style="border:none;">
                          <button type="submit" class="btn btn-dark">GO BACK</button>
                    </div>
              </a>
                    </div>
                </div>
                <div class="card mt-5" style="background-image: linear-gradient(to bottom, #000, #232124, #39353b, #232124, #000);">
                    <div class=" card-header">
                        <h4 style="color:white;">Edit information of "<?php echo $_COOKIE['user'];?>":</h4>
                    </div>
                    <div class="card-body">

                      <?php
                       $conn = new mysqli('eu-cdbr-west-02.cleardb.net','b9cfb5db07fee5','7b8866b1','heroku_eb2b6d43207ebf8');
                       $userUsername=$_COOKIE['user'];
                       $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$userUsername'");
                       while($row = mysqli_fetch_array($result)) {
                      ?>
                        <form action="code.php" method="POST" style="font-color:white;">
                          <div class="form-group mb-3">
                              <label for="">Username</label>
                              <input type="text" name="username" class="form-control" placeholder="Confirm username" required value="<?php echo $row['username']; ?>">
                          </div>
                            <div class="form-group mb-3">
                                <label for="">E-mail</label>
                                <input type="text" name="mail" class="form-control" placeholder="New e-mail" required value="<?php echo $row['mail']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="PLease, use letters and numbersrvm" required value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Surname</label>
                                <input type="text" name="surname" class="form-control" placeholder="New surname" required value="<?php echo $row['surname']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone No.</label>
                                <input type="text" name="phone" class="form-control" placeholder="New phone number" required value="<?php echo $row['phone']; ?>">
                            </div>
                            <div class="form-group mb-3" style="text-align:center;">
                                <button type="submit" name="update_data" class="btn btn-dark">UPDATE</button>
                            </div>
                        </form>
                        <?php
                          }
                        ?>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://v2.txt.me/livechat/js/wrapper/cf93366e68d54998a033909344bfd8de" async></script>
    </div>
  </body>
</html>
