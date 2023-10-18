<?php
include_once("./koneksi.php");

//HOME
function namaDepan($id_NamaDepan) {
    global $conn;
    $data = mysqli_query($conn, "SELECT namaDepan FROM home WHERE id='$id_NamaDepan'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaDepan'];
    return $text;
}
function namaBelakang($id_NamaBelakang) {
    global $conn;
    $data = mysqli_query($conn, "SELECT namaBelakang FROM home WHERE id='$id_NamaBelakang'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaBelakang'];
    return $text;
}





?>