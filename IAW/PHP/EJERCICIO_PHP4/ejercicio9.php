<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reemplazar el texto de una cadena</title>
</head>
<body>

    <?php
      
      $cadena= "Hola Mundo";
      $new_chain = str_replace("Mundo", "Fran", $cadena);

      echo "Hemos reemplazado $cadena por $new_chain"

      
      
    ?>
        
</html>