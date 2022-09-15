<?php require_once("read.php"); ?>
<?php require_once("koneksi_db.php"); ?>

<?php
$header = apache_request_headers();
$key = $header['key'];

$method = $_SERVER['REQUEST_METHOD'];
$status_request = array();


//cek token user
$sql = "SELECT * FROM user WHERE token = '$key'";
$cek_token = $connection->query($sql);

if($cek_token->num_rows > 0){
    if($method=='GET'){
        $status_request['status'] = [
            "http code" => 200,
            "description" => "Request OK"
        ];

        echo json_encode($response);
        echo json_encode($status_request);

    } else {
        $status_request['status'] = [
            "http code" => 400,
            "description" => "Request Failed"
        ];
    }
} else {
    echo "Your token/key is not valid";
}






