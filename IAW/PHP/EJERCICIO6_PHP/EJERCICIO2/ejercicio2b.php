<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['fecha_nacimiento'] = $fecha_nacimiento;

    echo "<h1>Datos guardados correctamente</h1>";
    echo "<a href='ejercicio2c.php'>Ir a la tercera página</a>";
} else {
    echo "<h1>Error: No se recibieron datos.</h1>";
}
?>