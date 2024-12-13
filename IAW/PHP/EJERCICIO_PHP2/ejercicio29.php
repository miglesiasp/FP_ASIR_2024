<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
<?php
 echo ". Una tienda ofrece un descuento del 15% sobre el total de la compra durante el mes de octubre.
Dado un mes y un importe, calcular cuál es la cantidad que se debe cobrar al cliente<br><br>";

$importe = 15;

$descuento = $importe * 0.15;
$final = $importe - $descuento;

echo "Si una persona gasta unos $importe euros al día y durante el mes de octubre hay un descuento del 15%. <br>
      Al cliente se le cobrará un total de $final euros por día"

?>

        
</html>