<?php

if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['contrasena'])) {

    setcookie('nombre', $_POST['nombre'], time() + 86400);
    setcookie('apellidos', $_POST['apellidos'], time() + 86400);
    setcookie('ciudad', $_POST['ciudad'], time() + 86400);
    setcookie('provincia', $_POST['provincia'], time() + 86400);
    setcookie('codigo_postal', $_POST['codigo_postal'], time() + 86400);
    setcookie('edad', $_POST['edad'], time() + 86400);
    setcookie('usuario', $_POST['usuario'], time() + 86400);
    setcookie('contrasena', $_POST['contrasena'], time() + 86400);

    echo "<h1>Usuario registrado</h1>";
} else {
    echo "<h1>Error: Faltan campos por completar.</h1>";
    echo "<p><a href='formulario.php'>Volver al formulario</a></p>";
}


echo "<br>";
echo "<a href='ejercicio3.php'>Volver al formulario</a> | ";
echo "<a href='ejercicio3c.php'>Consultar datos</a>";
?>