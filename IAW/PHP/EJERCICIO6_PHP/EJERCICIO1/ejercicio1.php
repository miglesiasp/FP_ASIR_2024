<?php

session_start();


$_SESSION['variable1'] = "Hola desde la página 1";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
</head>
<body>
    <p>Variable 1 definida.</p>
    <a href="ejercicio1b.php">Ir a Página 2</a>
</body>
</html>


