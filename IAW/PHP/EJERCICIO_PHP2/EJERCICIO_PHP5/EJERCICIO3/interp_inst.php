<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Interpretacion por instrumento</title>
</head>
<body>
<form method="POST" action="">
    Código del instrumento: <input type="number" name="codigo_instrumento" required><br>
    <input type="submit" value="Consultar">
</form>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_instrumento = $_POST['codigo_instrumento'];

    $sql = "SELECT Obras.nombre_obra, Obras.autor, Obras.anio_creacion
            FROM Interpretacion
            JOIN Obras ON Interpretacion.codigo_obra = Obras.codigo_obra
            WHERE Interpretacion.codigo_instrumento = $codigo_instrumento";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<h2>Instrumentos</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Obra</th>
                <th>Autor</th>
                <th>Año de creación</th>
            </tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
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