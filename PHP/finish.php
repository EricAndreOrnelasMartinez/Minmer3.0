<?php 
require_once('dbcon.php');
$id = $_POST['id'];
$total = $_POST['total'];
$city = $_POST['city'];
$sql = "UPDATE $city SET Terminado=1 WHERE ID_SQL=$id";
if($total === '97'){
    $resSQL = mysqli_query($con, $sql);
    if($resSQL){
        echo json_encode('1');
    }else{
        echo json_encode('0');
    }
}else{
    echo json_encode('2');
}