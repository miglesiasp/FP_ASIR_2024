<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial de un número</title>
</head>
<body>
    <h1>Factorial de un número</h1>
    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        function factorial($n) {
            if ($n <= 1) {
                return 1;
            }
            return $n * factorial($n - 1);
        }

        $resultado = factorial($numero);
        echo "Factorial de $numero: $resultado";
    }
    ?>
</body>
</html>