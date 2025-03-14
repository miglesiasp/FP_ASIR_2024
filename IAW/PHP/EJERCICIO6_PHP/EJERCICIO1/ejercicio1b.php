<?php

session_start();


$_SESSION['variable2'] = "Hola desde la página 2";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>
    <p>Variable 2 definida.</p>
    <a href="ejercicio1c.php">Ir a Página 3</a>
</body>
</html>