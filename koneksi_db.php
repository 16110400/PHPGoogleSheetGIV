<?php
ob_start();

if (!isset($_SESSION)) {
    session_start();
}

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'googlesheet_api';

$connection = mysqli_connect($host, $user, $password, $db_name);

if (!$connection) {
    die("Koneksi ke DB Gagal !" . mysqli_error($connection));
}
