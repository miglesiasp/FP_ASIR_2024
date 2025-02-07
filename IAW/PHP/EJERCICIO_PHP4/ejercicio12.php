<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar una cadena aleatoria</title>
</head>
<body>

    <?php
      
      $cadena= bin2hex(random_bytes(10));
      
     echo $cadena;
      
      
    ?>
        
</html>