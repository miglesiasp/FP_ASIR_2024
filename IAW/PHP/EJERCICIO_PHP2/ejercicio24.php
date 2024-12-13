<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
<?php
 echo ". Un programa que dados la cantidad de alumnos y de alumnas que hay en tu clase, tras
procesarlo, mostrará el porcentaje correspondiente a cada género.  <br> <br>";

 $alumnos = 20;
 $mujeres = 10;
 $hombres = 10;

 $porcentajeh = ($hombres * 100) / $alumnos;
 $porcentajem = ($mujeres * 100) / $alumnos;

 echo "En una clase que cuenta con $alumnos alumnos, el porcentaje de hombres es de $porcentajeh % y el de mujeres es de $porcentajem %";


?>

        
</html>