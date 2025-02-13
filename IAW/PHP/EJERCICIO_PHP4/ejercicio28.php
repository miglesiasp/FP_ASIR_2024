<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Invertir un número</title>
</head>
<body>
    <h1>Invertir un número</h1>
    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" required><br><br>
        <input type="submit" value="Invertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        $invertido = strrev($numero);
        echo "Número invertido: $invertido";
    }
    ?>
</body>
</html>