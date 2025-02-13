<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora básica</title>
</head>
<body>
    <h1>Calculadora básica</h1>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" step="any" name="num1" required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" step="any" name="num2" required><br><br>
        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                $resultado = ($num2 != 0) ? $num1 / $num2 : "Error: División por cero.";
                break;
            default:
                $resultado = "Operación no válida.";
        }
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>