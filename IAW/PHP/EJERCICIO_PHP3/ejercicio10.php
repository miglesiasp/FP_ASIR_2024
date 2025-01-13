<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    echo "Escribir un programa que multiplique los 20 primeros números naturales (1*2*3*4*5…) y
    muestre el resultado.". "<br>" . "<br>";

    $resultado = 1;

    
    for ($i = 1; $i <= 20; $i++) {
        $resultado *= $i; 
    }
    
   
    echo "El resultado de multiplicar los 20 primeros números naturales es: $resultado";



?>
        
</html>