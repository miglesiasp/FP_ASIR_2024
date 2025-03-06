<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Insertar instrumento</title>
</head>
<body>
<form method="post" action="insert_ins.php">
    
    Nombre: <input type="text" name="nombre" required><br>
    <label for="tipo"> Tipo </label>
        <select name="tipo" id="tipo">
            <option value="viento"> Viento </option>
            <option value="cuerda"> Cuerda </option>
            <option value="percursion"> Percursion </option>
            <option value="electrico"> Electrico </option>
        </select><br>
    <label for="origen"> Origen </label>
        <select name="origen" id="origen">
            <option value="aborigen"> Aborigen </option>
            <option value="cubano"> Cubano </option>
            <option value="europeo"> Europeo </option>
            <option value="mexicano"> Mexicano </option>
            <option value="guatemalteco"> Guatemalteco </option>
        </select><br>
    Modelo: <input type="text" name="modelo" required><br>
    <input type="submit" value="Insertar Instrumento">
</form>
<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $origen = $_POST['origen'];
    $modelo = $_POST['modelo'];
    

    $sql = "INSERT INTO instrumentos (nombre, tipo, origen, modelo)
            VALUES ('$nombre', '$tipo', '$origen', '$modelo')";

    if ($conn->query($sql) === TRUE) {
        echo "Instrumento insertado correctamente.";
    } else {
        echo "Error" . $sql . "<br>";
    }

$conn->close();
}


?>
</body>
</html>