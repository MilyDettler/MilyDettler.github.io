<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Trabajo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script>
            function generarNumeroOrden(){
                const numeroOrden = 'ORD-' +Math.floor(Math.random()*1000000);
                document.getElementById('numeroOrden').value=numeroOrden;
            }
            window.onload= generarNumeroOrden;
        </script>
    </head>
    <body>
    <div class="container">
        <!-- Logo y encabezado -->
        <div class="text-center">
            <img src="imagenes/LOPEZ logo.svg" alt="logo" class="logo.1"/>
        </div>
        <div class="dueño">
            <h3>LÓPEZ MARIANO</h3>
            <p class="mb-1">Técnico Mecánico y Frigorista</p>
        </div>
        <!-- Datos de contacto -->
        <div class="datos">
            <p><img src="imagenes/tel.jpeg" alt="tel" class="tel"/> (0343) 155244293</p>
            <p><img src="imagenes/ubi.jpeg" alt="ubi" class="ubi"/> 3100 Paraná, Entre Ríos</p>
            <p><img src="imagenes/mail.jpeg" alt="mail" class="mail"/> lopez.mariano@live.com</p>
            <p><img src="imagenes/nav.jpeg" alt="nav" class="nav"/> LPZ Refrigeración</p>
        </div>

        <!-- Título de la orden -->
        <h5 class="text-center my-3">ORDEN DE TRABAJO</h5>

        <!-- Formulario -->
        <div class="contenedor_formulario">
            <form method="post">
                <label for="numeroOrden" class="numeroOrden" name="numeroOrden">Número de Orden</label>
                <input type="text" id="numeroOrden" name="numeroOrden" disabled="">
                
                <div class="form-group">
                    <label for="date">Seleccione una fecha</label>
                    <input type="date" class="form-control" name="fecha" id="date">
                </div>

                <div class="form-group">
                    <label for="servicio" class="servicio">Servicio Solicitado</label>
                    <input type="text" class="form-control" name="servicio" id="servicio" placeholder="Servicio Solicitado">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="razonSocial">Razón Social</label>
                        <input type="text" class="form-control" name="razonSocial" id="razonSocial" placeholder="Razón Social">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="solicitante">Solicitante</label>
                        <input type="text" class="form-control" name="solicitante" id="solicitante" placeholder="Solicitante">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="locacion">Nº de tienda</label>
                        <input type="text" class="form-control" name="nTienda" id="nTienda" placeholder="Nº de tienda">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telefono">Localidad/Provincia</label>
                        <input type="text" class="form-control" name="localidad" id="localidad" placeholder="Localidad/Provincia">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inconveniente">Inconveniente Detectado</label>
                    <input type="text" class="form-control" name="inconveniente" id="inconveniente" placeholder="Inconveniente Detectado">
                </div>

                <div class="form-group">
                    <label for="tareas">Tareas Desarrolladas</label>
                    <input type="text" class="form-control" name="tareas" id="tareas" placeholder="Tareas Desarrolladas">
                </div>

                <div class="form-group">
                    <label for="repuestos">Repuestos Utilizados</label>
                    <input type="text" class="form-control" name="repuestos" id="repuestos" placeholder="Repuestos Utilizados">
                </div>

                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <input type="text" class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="resuelto" name="estado" class="custom-control-input" value="Resuelto">
                        <label class="custom-control-label" for="resuelto">Resuelto</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="pendiente" name="estado" class="custom-control-input" value="Pendiente">
                        <label class="custom-control-label" for="pendiente">Pendiente</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="presupuestar" name="estado" class="custom-control-input" value="A Presupuestar">
                        <label class="custom-control-label" for="presupuestar">A Presupuestar</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="horaEntrada">Hora de Entrada</label>
                    <input type="time" class="form-control" name="horaEntrada" id="horaEntrada">
                </div>
                <div class="form-group">
                    <label for="horaSalida">Hora de Salida</label>
                    <input type="time" class="form-control" name="horaSalida" id="horaSalida">
                </div>

                <div class="form-group">
                    <label for="horaTotal">Cantidad de Horas</label>
                    <input type="number" class="form-control" name="horaTotal" id="horaTotal">
                </div>
                <div class="form-group">
                    <label for="kilometros">Cantidad de KM</label>
                    <input type="number" class="form-control" name="kilometros" id="kilometros">
                </div>
                <div class="form-group">
                    <label for="operarios">Cantidad de Operarios</label>
                    <input type="number" class="form-control" name="operarios" id="operarios">
                </div>

                <!-- Firma del técnico -->
                <div class="form-group">
                    <label for="tecnico" class="tecnico" name="tecnico">Tecnico Responsable</label>
                    <input type="text" class="form-control" name="tecnico" id="tecnico" placeholder="Tecnico Responsable">
                </div>

                <div class="form-group">
                    <p class="conformidad"><b>Quien suscribe, en representación del cliente, recibe conforme el servicio prestado por <img src="imagenes/LOPEZ logo.svg" alt="logo" class="logo"/></b></p>
                    <div class="form-group col-md-6">
                        <label for="tienda" class="tienda" name="tienda">Empresa/Tienda</label>
                        <input type="text" class="form-control" name="tienda" id="tienda" placeholder="Empresa/tienda">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="legajo" class="legajo">Nº de legajo</label>
                        <input type="number" class="form-control" name="legajo" id="legajo" placeholder="Nº de Legajo">
                    </div>
                </div>

                <input class="btn-primary" type="submit"name="submit" value="Guardar Orden">
            </form>
        </div>
    </div>
        <script>
            const observacionesInput = document.getElementById('observaciones');
            observacionesInput.addEventListener('input', function() {
            const valor = observacionesInput.value;
            console.log('Observaciones:', valor);

            if (valor.length > 500) {
                alert('¡Atención! El texto es demasiado largo.');
                observacionesInput.value = valor.slice(0, 500);
            }
            });
        </script>

        <?php
            include("orden.php");
        ?>
    </body>
</html>
