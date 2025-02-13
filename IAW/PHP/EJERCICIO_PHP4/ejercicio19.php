<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion que reciba dos números reales y devuelva su suma</title>
</head>
<body>
<h1>Introduce dos números</h1>


    <form action="ejercicio19.php" method="post">
        <label for="num1">Primer número:</label>
        <input type="number" step="any" name="num1" id="num1"><br><br>
        
        <label for="num2">Segundo número:</label>
        <input type="number" step="any" name="num2" id="num2" required><br><br>

        <input type="submit" value="Sumar">
    </form>

    <?php

            function sumar($num1, $num2) {
                return $num1 + $num2;           
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                $resultado = $num1 + $num2;

                echo "El resultado de la suma es $resultado";
            }
        
    ?>

   
</html>