<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Nombre de instrumento</title>
</head>
<body>
<form method="post" action="consulta_nom.php">
    Nombre de instrumento: <input type="text" name="nombre" required><br>
    <input type="submit" value="Consultar">
</form>
<?php
include 'conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
   

    $sql = "SELECT * FROM instrumentos WHERE nombre = '$nombre'";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<h2>Instrumentos</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Origen</th>
                <th>Modelo</th>
            </tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['codigo'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['tipo'] . "</td>
                    <td>" . $fila['origen'] . "</td>
                    <td>" . $fila['modelo'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No hay instrumentos registrados.";
    }
}

$conn->close();
?>

</body>
</html>