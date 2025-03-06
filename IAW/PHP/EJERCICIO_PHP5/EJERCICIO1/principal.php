
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Página Personal </title>
</head>
<body>
    <h1>Página personal</h1> <br>
    <h2> Lo has conseguido!!! OLEEEEEE </h2> <br>
    <?php

include 'conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['USUARIO'];
    $contraseña = $_POST['CONTRASENIA'];

    $rs = comprobar($conn, $usuario, $contraseña);

    if(mysqli_num_rows($rs) > 0) {
        while($row = mysqli_fetch_array($rs)){
            echo "DNI" . $row['DNI'] . "<br>";
            echo "NOMBRE" . $row['NOMBRE'] . "<br>";
            echo "APELLIDOS" . $row['APELLIDOS'] . "<br>";
            echo "LOCALIDAD" . $row['LOCALIDAD'] . "<br>";
            echo "CENTRO" . $row['CENTRO_ESTUDIOS'];
        }
    } else {
        echo "No existe el usuario";
    }

}
mysqli_close($conn)
?>
</body>
</html>

