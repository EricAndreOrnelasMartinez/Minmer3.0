<?php 
require_once('dbcon.php');
$id = $_POST['id'];
$city = $_POST['city'];
$idu = $_POST['idu'];
$sql = "DELETE FROM subP WHERE ID_sub=$idu";
$resSQL = mysqli_query($con,$sql); 
if($resSQL){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>