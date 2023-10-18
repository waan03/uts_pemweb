<?php
$serverName = "localhost"; 
$userName = "root";
$password = "123";
$dbName = "utsjaki";

//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//cek koneksi
if (!$conn) {
    die("koneksi gagal");
}
?>