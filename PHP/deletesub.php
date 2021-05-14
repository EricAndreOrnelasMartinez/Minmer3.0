<?php 
require_once('dbcon.php');
session_start();
$mail = $_SESSION['mail'];
$id = $_POST['id'];
$city = $_POST['city'];
$idu = $_POST['idu'];
$sql = "DELETE FROM subP WHERE ID_sub=$idu";
$resSQL = mysqli_query($con,$sql); 
if($resSQL){
    $sqlInsert = "INSERT INTO Modifications(Mail,Hour,Day,City,RowN,Description) VALUE('$mail',current_time(),current_date(),'sub',$id,'Eliminado');";
    $query = mysqli_query($con,$sqlInsert);
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>