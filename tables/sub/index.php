<?php 
$city = $_GET['city'];
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subproceso - <?php echo $city ?></title>
</head>
<body>
    <button type="button"><a href="../?city=CDMX">Volver</a></button>
    <button type="button"><a href="./Nuevo/">Nuevo</a></button>
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
                    <td><a href="./Nuevo/?city=<?php echo $city ?>&id=<?php echo $id ?>"><button type="button">Nuevo</button></a></td>
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
        $sql = "SELECT * FROM subP WHERE city='$city' AND ID_SQL=$id";
        $ans = mysqli_query($con,$sql);
        while($show = mysqli_fetch_array($ans)){
            $total = 0; 
            if(validation($show['ID_SQL'])){
                $total = $total + 5;
            }
            if(validation($show['FechaC'])){
                $total = $total + 5;
            }
            if(validation($show['FechaE'])){
                $total = $total + 5;
            }
            if(validation($show['Operador'])){
                $total = $total + 5;
            }
            if(validation($show['Placas'])){
                $total = $total + 5;
            }
            if(validation($show['ID'])){
                $total = $total + 5;
            }
            if(validation($show['SO'])){
                $total = $total + 5;
            }
            if(validation($show['Factura'])){
                $total = $total + 5;
            }
            if(validation($show['Cliente'])){
                $total = $total + 5;
            }
            if(validation($show['PZS'])){
                $total = $total + 5;
            }
            if(validation($show['Caja'])){
                $total = $total + 5;
            }
            if(validation($show['Subtotal'])){
                $total = $total + 5;
            }
            if(validation($show['Horario'])){
                $total = $total + 5;
            }
            if(validation($show['Direccion'])){
                $total = $total + 5;
            }
            if(validation($show['Destino'])){
                $total = $total + 5;
            }
            if(validation($show['Concepto'])){
                $total = $total + 5;
            }
            if(validation($show['Capacidad'])){
                $total = $total + 5;
            }
            if(validation($show['Observaciones'])){
                $total = $total + 5;
            }
            if(validation($show['OE'])){
                $total = $total + 5;
            }
            if(validation($show['Custodia'])){
                $total = $total + 2;
            }
            if($show['Terminado'] > 0){
                $total = $total + 3;
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
             <td><a href="../Editar/?ids=<?php echo $show['ID_SQL']; ?>&city=<?php echo $city ?>"><button type="button" class="btn btn-succes">Modificar</button></a></td>
             <td><a href="../PHP/delete.php?id=<?php echo $show['ID_SQL'] ?>&city=<?php echo $city ?>"><button type="button">Eliminar</button></a></td>
             <td><a href="../PHP/terminar.php?id=<?php echo $show['ID_SQL'] ?>&city=<?php echo $city ?>"><button type="button">Terminar</button></a></td>
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
</html>