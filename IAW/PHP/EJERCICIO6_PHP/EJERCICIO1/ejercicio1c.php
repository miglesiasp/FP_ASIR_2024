<?php

session_start();


$variable1 = $_SESSION['variable1'];
$variable2 = $_SESSION['variable2'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 3</title>
</head>
<body>
    <h1>Variables desde las páginas anteriores:</h1>
    <p>Variable 1: <?php echo $variable1; ?></p>
    <p>Variable 2: <?php echo $variable2; ?></p>
</body>
</html>