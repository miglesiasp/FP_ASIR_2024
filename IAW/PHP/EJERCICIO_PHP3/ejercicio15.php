<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
<h1>Introduce dos números</h1>


    <form action="ejercicio15.php" method="post">
        <label for="num1">Primer número:</label>
        <input type="number" step="any" name="num1" id="num1"><br><br>
        
        <label for="num2">Segundo número:</label>
        <input type="number" step="any" name="num2" id="num2" required><br><br>

        <input type="submit" value="Comparar">
    </form>

    <?php

        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            echo "Escribir un programa que lea dos números y diga cual es el mayor y cual el menor" . "<br>" . "<br>";

            $num1 = $_POST ["num1"];
            $num2 = $_POST ["num2"];


            $mayor = max($num1, $num2);
            $menor = min($num1, $num2);


            echo "El número mayor es: $mayor" . "<br>";
            echo "El número menor es: $menor\n";

        }
    ?>

   
</html>

