<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
<body>
<?php
 echo ". Calcular la tabla de multiplicar (de 0 a 10) de un número dado<br><br>";
 

 
 function tabla($numero) 
    {
     
        for ($i = 0; $i <= 10; $i++) {
         
             echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
         }
    }
 
 
 $numero = 7;  
 tabla($numero);
 
 
 
 
?>

        
</html>