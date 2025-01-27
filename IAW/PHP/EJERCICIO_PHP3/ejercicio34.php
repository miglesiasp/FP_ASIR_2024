<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 34</title>
</head>
<body>
    <h3>Introduce un número entero de 4 cifras</h3>

    <form action="ejercicio34.php" method="POST">
        <label for="numero">Número de 4 cifras: </label>
        <input type="number" id="numero" name="numero" required min="1000" max="9999"><br><br>
        <button type="submit">Invertir Número</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $numero = $_POST["numero"];

        
        if (strlen($numero) == 4) {
            $numeroInvertido = strrev($numero);
             echo "El número invertido es: $numeroInvertido" . "<br>";
        } else {
            echo "Por favor, ingresa un número de 4 cifras.";
        }
    }
    ?>
</body>
</html>
