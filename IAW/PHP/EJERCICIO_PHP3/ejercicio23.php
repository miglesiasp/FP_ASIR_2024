<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Farenheit a Celsius</title>
</head>
<body>
    <h3>De Farenheit a Celsius </h3>
    <form method="POST" action="ejercicio23.php">
        <label for="farenheit">Introduce un número:</label>
        <input type="number" id="num" name="num" required><br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $far = $_POST ["num"];


        $cel = (($far - 32)*5)/9;
        echo "En Farenheit son $far grados, pasandolo a celsius seria $cel grados";
   
   }
   
?>

</html>
