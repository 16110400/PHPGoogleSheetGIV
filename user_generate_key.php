<?php
require_once('koneksi_db.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $token = md5($username.$password);
    // echo $token;

    $sql = "UPDATE user SET token = '$token' WHERE username = '$username'";
    $result = $connection->query($sql);

    if($result){
        $_SESSION['user_token'] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        This is your Token / Key = <b>$token</b>
        </div>";
    } else {
        echo mysqli_error($connection);
    }

    header("Location: index.php");

}