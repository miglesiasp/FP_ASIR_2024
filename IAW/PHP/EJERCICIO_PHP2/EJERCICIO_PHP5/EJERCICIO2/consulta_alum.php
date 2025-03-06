<?php
include 'conn.php';

$sql = "SELECT * FROM alumnos";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Alumnos</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Localidad</th>
            <th>Año Inicio</th>
            <th>Modo Acceso</th>
        </tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila['DNI'] . "</td>
                <td>" . $fila['nombre'] . "</td>
                <td>" . $fila['apellidos'] . "</td>
                <td>" . $fila['localidad'] . "</td>
                <td>" . $fila['anio_inicio'] . "</td>
                <td>" . $fila['modo_acceso'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No hay alumnos registrados.";
}

$conn->close();
?>