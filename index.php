<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad: PHP</title>
</head>
<body>
    
</body>
</html>

<?php

# Crear un programa en PHP en el cual muestre nombre, apellido, edad, hobbie, editor de código preferido, sistema operativo
$nombre  =  "Lara Evelyn";
$apellido  =  "Baranowski Calvet";
$edad  =  "22";
$hobbie  =  "Canto";
$editor  =  "Visual Studio Code";

# Publicar Nombre y Apellido
echo "<h3>".$nombre." ".$apellido."</h3>";

# Publicar la Edad y Hobbie
$anios = "<span><b>Edad: </b></span> <i>$edad años</i>";
echo "<p>".$anios."</p>";

$text = "<span><b>Hobbie: </b></span> <i>$hobbie</i>";
echo "<p>".$text."</p>";

# Publicar la Editor de Código
$code = "<span><b>Editor de Código: </b></span> <i>$editor</i>";
echo "<p>".$code."</p>";

//echo PHP_OS;
$system = "<span><b>Sistema Operativo: </b></span>";
echo "<p>".$system." "."<i>".PHP_OS."</i></p>";


?>