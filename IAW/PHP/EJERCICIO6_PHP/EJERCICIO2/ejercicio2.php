<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h1>Ingresa tus datos</h1>
    <form action="ejercicio2b.php" method="POST">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>