<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Login / Registro</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action = "login.php">
        <label for="usuario">Introduce tu usuario </label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contraseña">Introduce la contraseña: </label>
        <input type="password" name="contraseña" id="contraseña" required>
        <br>
        <input type="submit" value="Entrar">
    </form>

    <?php
    
    include_once('conexion.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

         $rs = mysqli_query($conn, "SELECT * FROM tbl_tabla WHERE USUARIO = '$usuario' AND CONTRASENIA = '$contraseña'" );

        if ($rs->num_rows > 0) {
            header ("Location: principal.php");
        } else {
            echo "No puedes pasar";
        }
    }
    mysqli_close($conn);
    ?>
</body>
</html>