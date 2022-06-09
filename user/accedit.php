<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WYW | Online advertisement-shopping center of el. devices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php
                  if(isset($_SESSION['status'])){
                ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  unset($_SESSION['status']);
                }?>
                <div class="row">
                  <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                      <div class="card-body">
                          <a href="accountpage.php">GO BACK</a>
                      </div>
                    </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>EDIT</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">E-mail</label>
                                <input type="text" name="mail" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Surname</label>
                                <input type="text" name="surname" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone No.</label>
                                <input type="text" name="phone" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_data" class="btn btn-primary">UPDATE</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
