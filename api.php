<?php
$con = mysqli_connect("localhost","root","123","utsjaki");
$response =array();
if($con){
    $sql = "select * from home";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row =mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['namaDepan'] = $row['namaDepan'];
            $response[$i]['namaBelakang'] = $row['namaBelakang'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}