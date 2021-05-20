<?php 
error_reporting(E_ALL);
ini_set('display_errors','1');

$city = $_GET['city'];
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/style.css">
    <title>Nuevo</title>
</head>
<body>
    <form id="data">
    Fecha de carga: <input type="date" name="FechaC">
    Fecha de entrega: <input type="date" name="FechaE">
    Operador: <input type="text" name="Operador">
    Placas: <input type="text" name="Placas">
    ID: <input type="text" name="ID">
    SO: <input type="text" name="SO">
    Factura: <input type="text" name="Factura">
    Cliente: <input type="text" name="Cliente">
    PZS: <input type="text" name="PZS" >
    Cajas: <input type="text" name="Caja">
    Subtotal: <input type="text" name="Subtotal">
    Horario: <input type="text" name="Horario">
    Direccion: <input type="text" name="Direccion">
    Destino: <input type="text" name="Destino" >
    Concepto: <input type="text" name="Concepto">
    Capacidad: <input type="text" name="Capacidad">
    Observaciones: <input type="text" name="Observaciones">
    OE: <input type="text" name="OE">
    <input type="hidden" name="city" value="<?php echo $city ?>">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    Custodia: <input type="text" name="Custodia">
    <input type="submit" value="Guardar">
    <h3 id="res"></h3>
    <a href="../?city=<?php echo $city ?>&id=<?php echo $id ?>"><button type="button">Regresar</button></a>
</body>
<script src="./sub.js"></script>
<script src="../../../JS/session.js"></script>
<script src="../../../JS/secureacces.js"></script>
</html>