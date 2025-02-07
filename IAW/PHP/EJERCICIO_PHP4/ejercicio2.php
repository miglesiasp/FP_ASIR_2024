<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera un número aleatorio comprendido entre dos dados.</title>
</head>
<body>
    <?php
       $dado1 = rand(1, 6);
       $dado2 = rand (1, 6);

       $numero = $dado1 + $dado2;

       echo "Un número aleatorio entre 2 dados de 6 ha sido: " . $numero;
    ?>
        
</html>