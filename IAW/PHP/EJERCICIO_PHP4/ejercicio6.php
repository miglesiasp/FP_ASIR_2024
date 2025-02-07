<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar si una variable está definida y no es nula (no tiene valor y no es el
    ejercicio anterior).</title>
</head>
<body>

    <?php
      
     $var = "";

      if (!isset($var)) {
        
        echo "La variable no esta vacía";
      }
      
      $a = "prueba";
      $b = "otraprueba";
      
      var_dump(isset($a));
      var_dump(isset($a, $b)); 
      
    ?>
        
</html>