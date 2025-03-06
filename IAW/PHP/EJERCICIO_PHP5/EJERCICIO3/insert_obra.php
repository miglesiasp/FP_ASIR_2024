<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Insertar Obra</title>
</head>
<body>
<form method="POST" action="">
    Nombre de la obra: <input type="text" name="nombre_obra" required><br>
    Autor: <input type="text" name="autor" required><br>
    Año de creación: <input type="number" name="anio_creacion"><br>
    <input type="submit" value="Insertar">
</form>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_obra = $_POST['nombre_obra'];
    $autor = $_POST['autor'];
    $anio_creacion = $_POST['anio_creacion'];

    $sql = "INSERT INTO Obras (nombre_obra, autor, anio_creacion)
            VALUES ('$nombre_obra', '$autor', $anio_creacion)";
    if ($conn->query($sql)) {
        echo "Obra insertada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>