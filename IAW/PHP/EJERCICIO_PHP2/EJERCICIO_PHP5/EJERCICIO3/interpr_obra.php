


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Interpretacion por instrumento</title>
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
    
        $sql = "SELECT Instrumentos.nombre, Instrumentos.tipo, Instrumentos.origen
                FROM Interpretacion
                JOIN Instrumentos ON Interpretacion.codigo_instrumento = Instrumentos.codigo
                WHERE Interpretacion.codigo_obra = $codigo_obra";
        $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<h2>Instrumentos</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Instrumento</th>
                <th>Tipo</th>
                <th>Origen</th>
            </tr>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['tipo'] . "</td>
                    <td>" . $fila['origen'] . "</td>
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
<?php
