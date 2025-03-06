<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Login / Registro</title>
</head>
<body>
    <h1>Lre</h1>
    <form method="POST" action = "registro.php">
        <label for="dni">Introduce tu DNI </label>
        <input type="text" name="dni" id="dni" required>
        <br>
        <label for="nombre">Introduce tu nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellidos"> Introduce tus apellidos: </label>
        <input type="text" name="apellidos" id="apellidos" required>
        <br>
        <label for="localidad"> Introduce tu localidad: </label>
        <input type="text" name="localidad" id="localidad" required>
        <br>
        <label for="centro"> Introduce tu centro de estudios: </label>
        <input type="text" name="centro" id="centro" required>
        <br>
        <label for="usuario"> Introduce tu usuario: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contraseña"> Introduce tu contraseña: </label>
        <input type="password" name="contraseña" id="contraseña" required>
        <br>
        <input type="submit" value="Registrarse">
    </form>

    <?php
    
    include_once('conexion.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $localidad = $_POST['localidad'];
        $centro = $_POST['centro'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        
        $sql = "INSERT INTO tbl_tabla (DNI, NOMBRE, APELLIDOS, LOCALIDAD, CENTRO_ESTUDIOS, USUARIO, CONTRASENIA)
        VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$centro', '$usuario', '$contraseña')";

        
        if (mysqli_query($conn, $sql)) {
            echo "Te has registrado correctamente";
        } 
    }
    mysqli_close($conn);
    ?>
</body>
</html>