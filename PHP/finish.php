<?php 
require_once('dbcon.php');
$id = $_POST['id'];
$city = $_POST['city'];
$sql = "UPDATE $city SET Terminado=1 WHERE ID_SQL=$id";
$resSQL = mysqli_query($con, $sql);
if($resSQL){
    echo json_encode('1');
}else{
    echo json_encode('0');
}