<?php 
require_once('dbcon.php');
$id = $_POST['id'];
$city = $_POST['city'];
$sql = "DELETE FROM $city WHERE ID_SQL=$id"; 
$res = mysqli_query($con, $sql);
if($res){
    echo json_encode('1');
}else{
    echo json_encode('0');
}

?>