<?php 
require_once('dbcon.php');
session_start();
$mail = $_SESSION['mail'];
$idu = $_POST['idu'];
$total = $_POST['total'];
$sql = "UPDATE subP SET Terminado=1 WHERE ID_sub=$idu";
$resSQL = mysqli_query($con, $sql); 
if($total === '97'){
    if($resSQL){
        $sqlInsert = "INSERT INTO Modifications(Mail,Hour,Day,City,RowN,Description) VALUE('$mail',current_time(),current_date(),'sub',$id,'Terminado');";
        $query = mysqli_query($con,$sqlInsert);
        echo json_encode('1');
    }else {
        echo json_encode('0');
    }
}else{
    echo json_encode('2');
}