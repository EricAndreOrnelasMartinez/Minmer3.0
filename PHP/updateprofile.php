<?php 
require_once('dbcon.php');
session_start();
$mailB = $_SESSION['mail'];
$mail = $_POST['mail'];
$name = $_POST['nombre'];
$last = $_POST['apellido'];
$rowN = $_POST['rowN'];
$nivel = $_POST['nivel'];
$sql = "UPDATE users SET Mail='$mail', Nombre='$name', Apellido='$last', rowN=$rowN, Nivel=$nivel";
$res = mysqli_query($con, $sql);
if($res){
    $_SESSION['mail'] = $mail;
    $_SESSION['nivel'] = $nivel;
    $_SESSION['rowN'] = $rowN;
    echo json_encode('1');
}else{
    echo json_encode('0');
}