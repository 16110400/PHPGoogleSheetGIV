<?php require_once("read.php"); ?>
<?php require_once("koneksi_db.php"); ?>

<?php
global $id, $key;
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}
$sql = "SELECT token FROM user WHERE id_user = '$id'";
$generate_token = $connection->query($sql);
$row = mysqli_fetch_array($generate_token);
// var_dump($row['token']);

if($generate_token->num_rows > 0){
    $key = $row['token'];
} else {
    $_SESSION['authentication'] = "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    </div>"; 
}

header('Content-Type: application/json');
$header = apache_request_headers();

// var_dump($header);die;
// var_dump($_SESSION);

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
        json_encode($status_request);

    } else {
        $status_request['status'] = [
            "http code" => 400,
            "description" => "Request Failed"
        ];
    }
} else {
    echo "Your token/key is not valid, Please Verified your account or get a token from admin.";
}






