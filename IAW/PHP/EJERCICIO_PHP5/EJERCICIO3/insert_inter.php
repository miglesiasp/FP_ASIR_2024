<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Insertar Interpretacion</title>
</head>
<body>
<form method="POST" action="">
    Código de la obra: <input type="number" name="codigo_obra" required><br>
    Código del instrumento: <input type="number" name="codigo_instrumento" required><br>
    <input type="submit" value="Insertar">
</form>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_obra = $_POST['codigo_obra'];
    $codigo_instrumento = $_POST['codigo_instrumento'];

    $sql = "INSERT INTO Interpretacion (codigo_obra, codigo_instrumento)
            VALUES ($codigo_obra, $codigo_instrumento)";
    if ($conn->query($sql)) {
        echo "Interpretación insertada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>