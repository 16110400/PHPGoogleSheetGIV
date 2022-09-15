<?php require_once("koneksi_db.php"); ?>
<?php

$header = apache_request_headers();

$key = $header['key'];

// var_dump($key);die;

$sql = "SELECT * FROM user WHERE token = '$key'";
$result = $connection->query($sql);

if($result->num_rows > 0){
    echo "Your token/key is valid";
} else {
    echo "Your token/key is not valid";
}
