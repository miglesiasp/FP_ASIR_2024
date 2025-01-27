<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
<form action="ejercicio19.php" method="post">
        <label for="numero">Edad del usuario:</label>
        <input type="number" step="any" name="numero" id="numero" required><br><br>
        

        <input type="submit" value="Resultado">
    </form>

    <?php
        echo "Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de
        catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o
        superiores a 60 años)." . "<br>" . "<br>";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
                $numero = (int) $_POST['numero'];
        
           if ($numero < 14) {
                echo "Infancia (menor de 14 años)";
           }
           else if ($numero >= 14 && $numero <= 26) {
                echo "Juventud (Entre 14 y 26 años)";
           }
           else if ($numero >= 27 && $numero <= 59) {
                echo "Adultez (Entre 27 y 59 años)";
           }
           else {
                echo "Personas mayores. (Mayor de 59 años)";
           }

           }
        }
    ?>
