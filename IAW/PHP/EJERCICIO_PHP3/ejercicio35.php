<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 35</title>
</head>
<body>
    <h3>Pasar de decimal a binario</h3>

    <form action="ejercicio35.php" method="POST">
        <label for="numero">Ingresar un número decimal </label>
        <input type="number" id="numero" name="numero" required><br><br>
        <button type="submit">Convertir</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $numero = $_POST["numero"];
        $binario = decbin($numero);

        echo "El número $numero en binario es $binario";

    }
    ?>
</body>
</html>
