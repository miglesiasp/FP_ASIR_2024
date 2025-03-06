<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Matricula Alumno </title>
</head>
<body>
<form method="post" action="">
    DNI: <input type="text" name="dni" required><br>
    ID Asignatura: <input type="text" name="id_asignatura" required><br>
    <input type="submit" value="Matricular Alumno">
</form>
<?php
include 'conn.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dni = $_POST['dni'];
        $id_asignatura = $_POST['id_asignatura'];

        
        $sql = "INSERT INTO matriculas (dni, id_asignatura)
                VALUES ('$dni', '$id_asignatura')";

        if ($conn->query($sql) === TRUE) {
            echo "Alumno matriculado correctamente.";
        } else {
            echo "Error: " . $sql ;
        }
    }

$conn->close();
?>
</body>
</html>