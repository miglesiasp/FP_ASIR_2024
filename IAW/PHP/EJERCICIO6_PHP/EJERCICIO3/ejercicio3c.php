<?php

if (isset($_COOKIE['nombre']) && isset($_COOKIE['usuario']) && isset($_COOKIE['contrasena'])) {
    echo "<h1>Datos del Usuario</h1>";
    echo "<p>Nombre: " . $_COOKIE['nombre'] . "</p>";
    echo "<p>Apellidos: " . $_COOKIE['apellidos'] . "</p>";
    echo "<p>Ciudad: " . $_COOKIE['ciudad'] . "</p>";
    echo "<p>Provicia: " . $_COOKIE['provincia'] . "</p>";
    echo "<p>Código Postal: " . $_COOKIE['codigo_postal'] . "</p>";
    echo "<p>Edad: " . $_COOKIE['edad'] . "</p>";
    echo "<p>Usuario: " . $_COOKIE['usuario'] . "</p>";
    echo "<p>Contraseña: " . $_COOKIE['contrasena'] . "</p>";
} else {
    echo "<h1>No hay datos registrados.</h1>";
}


echo "<br>";
echo "<a href='ejercicio3.php'>Volver al formulario</a> | ";
echo "<a href='ejercicio3c.php'>Consultar datos</a>";
?>