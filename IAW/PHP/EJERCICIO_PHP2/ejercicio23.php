<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
<?php
 echo "Debido a la nueva situación excepcional, una farmacia va a aplicar un descuento a sus
productos del 10%. Realizar un programa que muestre el nuevo precio de un artículo dado <br> <br>";

 $precio = 85;
 $descuento = $precio * 0.10;

$preciodescuento = $precio - $descuento;

echo "Los productos con un precio de $precio euros recibirán un descuento del 10%, es decir, $descuento. Esto hará que el precio final 
del producto sea de $preciodescuento euros";


?>

        
</html>