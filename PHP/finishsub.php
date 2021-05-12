<?php 
require_once('dbcon.php');
$idu = $_POST['idu'];
$sql = "UPDATE subP SET Terminado=1 WHERE ID_sub=$idu";
$resSQL = mysqli_query($con, $sql); 
if($resSQL){
    echo json_encode('1');
}else {
    echo json_encode('0');
}