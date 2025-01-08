<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    echo "Escribir un programa que imprima por pantalla los cuadrados de los 30 primeros números
    naturales." . "<br>" . "<br>";

    for ($i = 1; $i <= 30; $i++) {

        $cuadrado = $i * $i;

        echo "El cuadrado de $i es igual a $cuadrado" . "<br>" . "<br>";
    }
    ?>
        
</html>