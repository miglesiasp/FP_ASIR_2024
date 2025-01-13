<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php
    echo "Escribir un programa que sume los cuadrados de los cien primeros números naturales,
    mostrando el resultado en pantalla.". "<br>" . "<br>";

    $resultado = 0;

    
    for ($i = 1; $i <= 100; $i++) {
        $resultado += $i; 
    }
    
   
    echo "El resultado de sumar los cuadrados de los cien primeros números naturales es: $resultado";



?>
        
</html>