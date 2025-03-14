<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="ejercicio3b.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        <br><br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>
        <br><br>
        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia" required>
        <br><br>
        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal" required>
        <br><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <br><br>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
    <br>
    <a href="ejercicio3c.php">Consultar datos</a>
</body>
</html>