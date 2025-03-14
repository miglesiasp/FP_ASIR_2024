<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Consultar Obra por codigo</title>
</head>
<body>
<form method="POST" action="">
    Código de la obra: <input type="number" name="codigo_obra" required><br>
    <input type="submit" value="Consultar">
</form>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_obra = $_POST['codigo_obra'];

    $sql = "SELECT * FROM Obras WHERE codigo_obra LIKE '%$codigo_obra%'";
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