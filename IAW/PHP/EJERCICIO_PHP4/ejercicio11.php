<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar espacios de una cadena</title>
</head>
<body>

    <?php
      
      $cadena= "Hola Mundo";
      $sin_espacios = str_replace(" ", "", $cadena);  

      echo "$cadena $sin_espacios";

      
      
    ?>
        
</html>