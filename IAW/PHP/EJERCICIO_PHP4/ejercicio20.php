<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área de un círculo</title>
</head>
<body>
    <h1>Función que devuelva el área de un circulo</h1>
    <form method="post">
        <label for="radio">Radio:</label>
        <input type="number" step="any" name="radio" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $radio = $_POST['radio'];
        $area = pi() * pow($radio, 2);
        echo "Área: $area";
    }
    ?>
</body>
</html>