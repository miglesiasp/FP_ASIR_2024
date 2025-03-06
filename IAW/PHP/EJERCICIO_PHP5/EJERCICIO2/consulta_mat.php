<?php
include 'conn.php';

$sql = "SELECT alumnos.nombre, alumnos.apellidos, asignaturas.asignatura AS asignatura
        FROM matriculas
        JOIN alumnos ON matriculas.dni = alumnos.dni
        JOIN asignaturas ON matriculas.id_asignatura = asignaturas.id";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Matrículas</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Alumno</th>
            <th>Asignatura</th>
        </tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila['nombre'] . " " . $fila['apellidos'] . "</td>
                <td>" . $fila['asignatura'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No hay matrículas registradas.";
}

$conn->close();
?>