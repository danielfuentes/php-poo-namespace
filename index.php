<?php
require_once("clases/Sumar.php");
require_once("clases/Sumar1.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajando con Namespace</title>
</head>
<body>
    <h1>Trabajando con Namespace</h1>
    <br>
    
    <?="<h2>".\operacion1\Sumatoria::sumar(2,2)."</h2>";?>
    <br>
    <?="<h2>".\operacion2\Sumatoria::sumar(2,2)."</h2>";?>
    
    
</body>
</html>