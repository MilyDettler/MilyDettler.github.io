<?php
    include("conexion.php");

    if (isset($_POST['submit'])){
        if(
            strlen($_POST['fecha']) >= 1 &&
            strlen($_POST['servicio']) >= 1 &&
            strlen($_POST['razonSocial']) >= 1 &&
            strlen($_POST['solicitante']) >= 1 &&
            strlen($_POST['nTienda']) >= 1 &&
            strlen($_POST['direccion']) >= 1 &&
            strlen($_POST['localidad']) >= 1 &&
            strlen($_POST['inconveniente']) >= 1 &&
            strlen($_POST['tareas']) >= 1 &&
            strlen($_POST['repuestos']) >= 1 &&
            strlen($_POST['observaciones']) >= 1 &&
            strlen($_POST['estado']) >= 1 &&
            strlen($_POST['horaEntrada']) >= 1 &&
            strlen($_POST['horaSalida']) >= 1 &&
            strlen($_POST['horaTotal']) >= 1 &&
            strlen($_POST['kilometros']) >= 1 &&
            strlen($_POST['operarios']) >= 1 &&
            strlen($_POST['tecnico']) &&
            strlen($_POST['tienda'])>=1 &&
            strlen($_POST['legajo']) >= 1 
            ){
                $fecha = date("d/m/y");
                $servicio = trim($_POST['servicio']);
                $razonSocial = trim($_POST['razonSocial']);
                $solicitante = trim($_POST['solicitante']);
                $nTienda = trim($_POST['nTienda']);
                $direccion = trim($_POST['direccion']);
                $localidad = trim($_POST['localidad']);
                $inconveniente = trim($_POST['inconveniente']);
                $tareas = trim($_POST['tareas']);
                $repuestos = trim($_POST['repuestos']);
                $observaciones = trim($_POST['observaciones']);
                $estado = trim($_POST['estado']);
                $horaEntrada = trim($_POST['horaEntrada']);
                $horaSalida = trim($_POST['horaSalida']);
                $horaTotal = trim($_POST['horaTotal']);
                $kilometros = trim($_POST['kilometros']);
                $operarios = trim($_POST['operarios']);
                $tecnico = trim($_POST['tecnico']);
                $tienda = trim($_POST['tienda']);
                $legajo = trim($_POST['legajo']);

                $consulta = "INSERT INTO orden(fecha,servicio,razonSocial,solicitante,nTienda,direccion,localidad,inconveniente,tareas,repuestos,observaciones,estado,horaEntrada,horaSalida,horaTotal,kilometros,operarios, tecnico, tienda, legajo)
                    VALUES ('$fecha','$servicio','$razonSocial','$solicitante','$nTienda','$direccion','$localidad','$inconveniente','$tareas','$repuestos','$observaciones','$estado','$horaEntrada','$horaSalida','$horaTotal','$kilometros','$operarios','$tecnico','$tienda','$legajo')";
                $resultado = mysqli_query($conex,$consulta);
                if($resultado){

                } else{
                    ?>
                    <h3 class="error">Ocurrio un error</h3>
                    <?php 
                }
        } 
        
    }

?>