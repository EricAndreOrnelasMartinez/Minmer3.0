<?php 
require_once('dbcon.php');
$idu = $_POST['idu'];
$total = $_POST['total'];
$sql = "UPDATE subP SET Terminado=1 WHERE ID_sub=$idu";
$resSQL = mysqli_query($con, $sql); 
if($total === '97'){
    if($resSQL){
        echo json_encode('1');
    }else {
        echo json_encode('0');
    }
}else{
    echo json_encode('2');
}