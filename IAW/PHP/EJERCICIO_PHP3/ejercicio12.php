<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
    echo "Escribir un programa que lea un número entero y realiza la suma de los 100 número
    siguientes, mostrando el resultado.". "<br>" . "<br>";

    $numero = 12;
    $resultado = 0;

    
    for ($i = $numero + 1; $i <= $numero + 100; $i++) {
        $resultado += $i; 
        echo " $resultado, ";
    }
    
   
    



?>
        
</html>