<?php 
$city = $_GET['city'];
?>
<?php 
require_once('../PHP/dbcon.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/cssforcitis.css">
    <title id="title"><?php echo  strtoupper($city);  ?></title>
</head>
<body>
    <header>
    <nav class="menu">
        <ul id="menu">
            <?php
            session_start();
            $aux = $_SESSION['nivel'];
            if($aux >= 5){
                ?>
                <li><a href="./?city=CDMX">CDMX</a></li>
                <li><a href="./?city=GDL">GDL</a></li>
                <li><a href="./?city=MTY">MTY</a></li>
                <li><a href="./?city=CUN">CUN</a></li>
                <li><a href="./?city=SJD">SJD</a></li>
                <li><a href="./?city=QRO">QRO</a></li>
                <li><a href="../logout.php">Log out</a></li>
                <li><a href="../Buscar/">Buscar</a></li>
                <li><a href="../Newuser/">Nuevo usuario</a></li>
                <li><a href="../Modificaciones/">Modificaciones</a></li>
                <?php
            }else if($aux <= 5 && $aux >= 3){
                ?>
                <li><a href="./?city=CDMX">CDMX</a></li>
                <li><a href="./?city=GDL">GDL</a></li>
                <li><a href="./?city=MTY">MTY</a></li>
                <li><a href="./?city=CUN">CUN</a></li>
                <li><a href="./?city=SJD">SJD</a></li>
                <li><a href="./?city=QRO">QRO</a></li>
                <li><a href="../logout.php">Log out</a></li>
                <li><a href="../Buscar/">Buscar</a></li>
                <?php
            }else{
                header("Location:../Buscar/");
            }
            ?>
        </ul>
    </nav>
    </header>
    <section>
    <table id="main">
        <thead>
            <tr>
                <td>Evidencia</td>
                <td>Progreso</td>
                <td>ID SQL</td>
                <td>Fecha de carga</td>
                <td>Fecha de entrega</td>
                <td>Operador</td>
                <td>Placas</td>
                <td>ID</td>
                <td>SO</td>
                <td>Factura</td>
                <td>Cliente</td>
                <td>PZS</td>
                <td>Cajas</td>
                <td>Subtotal</td>
                <td>Horario</td>
                <td>Dirección</td>
                <td>Destino</td>
                <td>Concepto</td>
                <td>Capacidad</td>
                <td>Observaciones</td>
                <td>OE</td>
                <td>Custodia</td>
                <td>Terminado</td>
                <?php session_start();
                $aux = $_SESSION['nivel'];
                if($aux > 5){
                    ?>
                    <td><a href="../Nuevo/"><button type="button">Nuevo</button></a></td>
                    <td><a href="../uploadE/">Subir Evidencia</a></td>
                    <?php
                }
                ?>
            <td>-</td>
            <td>-</td>
            </tr>
        </thead>
        <?php
        function validation($var){
            return !empty($var);
        }
        $sql = "SELECT * FROM $city";
        $ans = mysqli_query($con,$sql);
        while($show = mysqli_fetch_array($ans)){
            $total = 0; 
            if(validation($show['ID_SQL'])){
                $total = 5;
            }
            if(validation($show['FechaC'])){
                $total = 10;
            }
            if(validation($show['FechaE'])){
                $total = 15;
            }
            if(validation($show['Operador'])){
                $total = 20;
            }
            if(validation($show['Placas'])){
                $total = 25;
            }
            if(validation($show['ID'])){
                $total = 30;
            }
            if(validation($show['SO'])){
                $total = 35;
            }
            if(validation($show['Factura'])){
                $total = 40;
            }
            if(validation($show['Cliente'])){
                $total = 45;
            }
            if(validation($show['PZS'])){
                $total = 50;
            }
            if(validation($show['Caja'])){
                $total = 55;
            }
            if(validation($show['Subtotal'])){
                $total = 60;
            }
            if(validation($show['Horario'])){
                $total = 65;
            }
            if(validation($show['Direccion'])){
                $total = 70;
            }
            if(validation($show['Destino'])){
                $total = 75;
            }
            if(validation($show['Concepto'])){
                $total = 80;
            }
            if(validation($show['Capacidad'])){
                $total = 85;
            }
            if(validation($show['Observaciones'])){
                $total = 90;
            }
            if(validation($show['OE'])){
                $total = 95;
            }
            if(validation($show['Custodia'])){
                $total = 97;
            }
            if($show['Terminado'] > 0){
                $total = 100;
            }
            $color = "red";
            if ( $total < 80 ){
                $color = "red";
            } elseif ($total < 99){
                $color = "yellow";
            } elseif ($total === 100){
                $color = "green";
            }
        ?>
        <tr class="<?php echo $color ?>">
            <td><a href="../uploadE/uploads/<?php echo $show['Factura'] ?>.pdf">Ir</a></td>
            <td><?php echo $total ?>%</td>
            <td><?php echo $show['ID_SQL'] ?></td>
            <td><?php echo $show['FechaC'] ?></td>
            <td><?php echo $show['FechaE'] ?></td>
            <td><?php echo $show['Operador'] ?></td>
            <td><?php echo $show['Placas'] ?></td>
            <td><?php echo $show['ID'] ?></td>
            <td><?php echo $show['SO'] ?></td>
            <td><?php echo $show['Factura'] ?></td>
            <td><?php echo $show['Cliente'] ?></td>
            <td><?php echo $show['PZS'] ?></td>
            <td><?php echo $show['Caja'] ?></td>
            <td><?php echo $show['Subtotal'] ?></td>
            <td><?php echo $show['Horario'].':00' ?></td>
            <td><?php echo $show['Direccion'] ?></td>
            <td><?php echo $show['Destino'] ?></td>
            <td><?php echo $show['Concepto'] ?></td>
            <td><?php echo $show['Capacidad'] ?></td>
            <td><?php echo $show['Observaciones'] ?></td>
            <td><?php echo $show['OE'] ?></td>
            <td><?php echo $show['Custodia'] ?></td>
            <td><?php echo $show['Terminado']?></td>
            <?php
            $aux = $_SESSION['nivel'];
            if($aux == 5 || $aux == 6){ 
            ?>
             <td><a href="../Editar/?ids=<?php echo $show['ID_SQL']; ?>&city=<?php $city ?>"><button type="button" class="btn btn-succes">Modificar</button></a></td>
             <td><a href="../PHP/delete.php?id=<?php echo $show['ID_SQL'] ?>&city=<?php $city ?>"><button type="button">Eliminar</button></a></td>
             <td><a href="../PHP/terminar.php?id=<?php echo $show['ID_SQL'] ?>&city=<?php $city ?>"><button type="button">Terminar</button></a></td>
            <?php
            }else{
                continue;
            }
            ?>
        </tr>
        <?php }?>
    </table>
</section>
</body>
<script src="tables.js"></script>
</html>