<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<body>
<?php
 echo "Dadas dos variables numéricas A y B, que el usuario debe teclear, se pide realizar un algoritmo
que intercambie los valores de ambas variables y muestre cuánto valen al final las dos
variables <br><br>";

$var1 = 128;
$var2 = 56;
$var3;

echo "A = $var1 y B = $var2 <br>";

$var3 = $var1;
$var1 = $var2;
$var2 = $var3;

echo "Con las variables cambiadas: A = $var1 y B = $var2 <br>"
?>

        
</html>