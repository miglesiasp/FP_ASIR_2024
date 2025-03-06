<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Consultar Obra por nombre</title>
</head>
<body>
<form method="POST" action="">
    Nombre de la obra: <input type="text" name="nombre_obra" required><br>
    <input type="submit" value="Consultar">
</form>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_obra = $_POST['nombre_obra'];

    $sql = "SELECT * FROM Obras WHERE nombre_obra LIKE '%$nombre_obra%'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<h2>Instrumentos</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Año de creación</th>
            </tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['codigo_obra'] . "</td>
                    <td>" . $fila['nombre_obra'] . "</td>
                    <td>" . $fila['autor'] . "</td>
                    <td>" . $fila['anio_creacion'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron obras.";
    }
}
?>
</body>
</html>