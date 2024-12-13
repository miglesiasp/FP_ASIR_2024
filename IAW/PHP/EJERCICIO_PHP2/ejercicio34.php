<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 34</title>
</head>
<body>
<?php
 echo ".Dada la velocidad de un coche, expresada en km/h, necesitamos saber cuántos metros por
segundos recorrer..<br><br>";


function convertir($velocidadKmh) {
    return $velocidadKmh * 1000 / 3600;
}


$velocidadKmh = 90;  
$velocidadMs = convertir($velocidadKmh);
echo "La velocidad es: $velocidadMs metros por segundo";



?>

        
</html>