<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar el numero de palabras de una frase</title>
</head>
<body>

    <?php
      
      $cadena="' Esta frase se ha escrito para contar palabras' " ;
      
      $numero= str_word_count($cadena);
      
      echo "El número de palabras en la frase $cadena es $numero palabras"
      
      
    ?>
        
</html>