<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
<?php
 echo "Tres empleados de una empresa de programación, han tenido la suerte de recibir un incentivo
(incremento de su sueldo) en relación a su producción, respectivamente: 13%, 26% y 39%.
Realiza un programa que calcule los nuevos sueldos.<br> <br>";

 $sueldo1 = 990;
 $sueldo2 = 1200;
 $sueldo3 = 900;

 $incremento1 = 0.13;
 $incremento2 = 0.26;
 $incremento3 = 0.39;

 $sueldonuevo1 = $sueldo1 * (1 + $incremento1);
 $sueldonuevo2 = $sueldo2 * (1 + $incremento2);
 $sueldonuevo3 = $sueldo3 * (1 + $incremento3);

 echo "El sueldo del trabajador 1 era de $sueldo1 euros, con su aumento de un 13% ahora es de $sueldonuevo1 euros<br>
       El sueldo del trabajador 2 era de $sueldo2 euros, con su aumento del 26% ahora es de $sueldonuevo2 euros <br>
       El sueldo del trabajador 3 era de $sueldo3 euros, con su aumento del 39% ahora es de $sueldonuevo3 euros" ;


?>

        
</html>

