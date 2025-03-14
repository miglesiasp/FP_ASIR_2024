<?php

session_start();


if (isset($_SESSION['usuario']) && isset($_SESSION['fecha_nacimiento'])) {
    echo "<h1>Bienvenido a la tercera página</h1>";
    echo "<a href='ejercicio2d.php'>Ir a la cuarta página</a>";
} else {
    echo "<h1>Error: No hay datos de sesión.</h1>";
}
?>