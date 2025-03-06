<?php
include 'conn.php';

$sql = "SELECT * FROM asignaturas";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Asignaturas</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Asignatura</th>
            <th>Créditos</th>
        </tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila['ID'] . "</td>
                <td>" . $fila['asignatura'] . "</td>
                <td>" . $fila['creditos'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No hay asignaturas registradas.";
}

$conn->close();
?>