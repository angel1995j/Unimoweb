<?php
// Establecemos la zona horaria
date_default_timezone_set("America/Mexico_City");

// 2. Variables
$nombre = "Juan";
$edad = 25;

// 3. Obtener la fecha actual
$fechaActual = date("d-m-Y H:i:s");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer archivo en PHP y HTML</title>
</head>
<body>
    <h1>Hola <?php echo $nombre; ?></h1>
    <p>Edad: <?php echo $edad; ?></p>
    <p>La fecha de hoy es: <?php echo $fechaActual; ?></p>
</body>
</html>
