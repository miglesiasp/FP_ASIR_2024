<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar si una cadena tiene carácter indicado</title>
</head>
<body>

    <?php
      
      $cadena= "Hola Mundo";
      $found = strpos($cadena, "M");  

      echo "El carácter M de $cadena esta en la posición $found";

      
      
    ?>
        
</html>