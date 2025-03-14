<?php

session_start();


if (isset($_SESSION['usuario']) && isset($_SESSION['fecha_nacimiento'])) {
    $usuario = strtoupper($_SESSION['usuario']); 
    $fecha_nacimiento = $_SESSION['fecha_nacimiento'];


    $fecha_actual = date("Y-m-d");
    $edad = date_diff(date_create($fecha_nacimiento), date_create($fecha_actual))->y;

    echo "<h1>Información del usuario</h1>";
    echo "<p>Nombre de usuario: $usuario</p>";
    echo "<p>Edad que cumple este año: $edad años</p>";
    echo "<p>Vuelve al formulario inicial: <a href = 'ejercicio2.php'> Vuelve </a><p>";
} else {
    echo "<h1>Error: No hay datos de sesión.</h1>";
}
?>