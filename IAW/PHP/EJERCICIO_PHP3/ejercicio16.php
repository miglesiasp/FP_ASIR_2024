<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
<h1>Introduce tres números</h1>


    <form action="ejercicio16.php" method="post">
        <label for="num1">Primer número:</label>
        <input type="number" step="any" name="num1" id="num1" required><br><br>
        
        <label for="num2">Segundo número:</label>
        <input type="number" step="any" name="num2" id="num2" required><br><br>

        <label for="num3">Tercer número:</label>
        <input type="number" step="any" name="num3" id="num3" required><br><br>

        <input type="submit" value="Comparar">
    </form>

    <?php

        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            echo "Escriba un programa que lea tres números enteros positivos, y que calcule e imprima en
            pantalla el menor y el mayor de todos ellos." . "<br>" . "<br>";

            $num1 = $_POST ["num1"];
            $num2 = $_POST ["num2"];
            $num3 = $_POST ["num3"];


            $mayor = max($num1, $num2, $num3);
            $menor = min($num1, $num2, $num3);


            echo "El número mayor es: $mayor" . "<br>";
            echo "El número menor es: $menor";

        }
    ?>

   
</html>