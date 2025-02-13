<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de moneda</title>
</head>
<body>
    <h1>Conversión de moneda</h1>
    <form method="post">
        <label for="cantidad">Cantidad:</label>
        <input type="number" step="any" name="cantidad" required><br><br>
        <label for="moneda">Moneda:</label>
        <select name="moneda" required>
            <option value="libra">Libra</option>
            <option value="dolar">Dólar</option>
            <option value="yen">Yen</option>
        </select><br><br>
        <input type="submit" value="Convertir a Euros">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST['cantidad'];
        $moneda = $_POST['moneda'];

        switch ($moneda) {
            case 'libra':
                $resultado = $cantidad * 1.22;
                break;
            case 'dolar':
                $resultado = $cantidad * 0.75;
                break;
            case 'yen':
                $resultado = $cantidad * 0.009;
                break;
            default:
                $resultado = "Moneda no válida.";
        }
        echo "<h2>Resultado: $resultado euros</h2>";
    }
    ?>
</body>
</html>