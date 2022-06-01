<?php
session_start();
$con = mysqli_connect("eu-cdbr-west-02.cleardb.net","ba1e484af256c7","95dbbe5d","heroku_ab7344589622e52");

if(isset($_POST['update_data']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];

    $query = "UPDATE users SET mail='$mail', name='$name',surname='$surname' ,phone='$phone' WHERE username='$username' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: accedit.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: accedit.php");
    }
}

?>
