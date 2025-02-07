<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dada una cadena, convertirla a mayúsculas o a minúsculas.</title>
</head>
<body>

    <?php
      
    $cadena = "Hola Mundo";
    $mayusculas = strtoupper($cadena);  
    $minusculas = strtolower($cadena);

    echo "$mayusculas" . "<br>" . "$minusculas";
      
    ?>
        
</html>