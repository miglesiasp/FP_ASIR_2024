<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Login / Registro</title>
</head>
<body>
<form method="post" action="insert_alumno.php">
    DNI: <input type="text" name="dni" required><br>
    Nombre: <input type="text" name="nombre" required><br>
    Apellidos: <input type="text" name="apellidos" required><br>
    Localidad: <input type="text" name="localidad"><br>
    Año inicio: <input type="number" name="año_inicio"><br>
    Modo acceso: <input type="text" name="modo_acceso"><br>
    <input type="submit" value="Insertar Alumno">
</form>
<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $localidad = $_POST['localidad'];
    $año_inicio = $_POST['año_inicio'];
    $modo_acceso = $_POST['modo_acceso'];

    $sql = "INSERT INTO alumnos (DNI, nombre, apellidos, localidad, anio_inicio, modo_acceso)
            VALUES ('$dni', '$nombre', '$apellidos', '$localidad', $año_inicio, '$modo_acceso')";

    if ($conn->query($sql) === TRUE) {
        echo "Alumno insertado correctamente.";
    } else {
        echo "Error" . $sql . "<br>";
    }
}

$conn->close();
?>
</body>
</html>