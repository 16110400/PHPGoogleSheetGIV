<?php require_once("read.php"); ?>
<?php require_once("koneksi_db.php"); ?>

<?php
header('Content-Type: application/json');
$header = apache_request_headers();

$method = $_SERVER['REQUEST_METHOD'];
$status_request = array();

$key = $header['key'];

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
        
    } else {
        $status_request['status'] = [
            "http code" => 400,
            "description" => "Request Failed"
        ];
    }
    
    echo json_encode($status_request);
} else {
    echo "Your token/key is not valid, Please Verified your account or get a token from admin.";
}