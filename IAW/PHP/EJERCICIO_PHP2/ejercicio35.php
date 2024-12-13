<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 35</title>
</head>
<body>
<?php
 echo ".Los porcentajes de cada uno de los trimestres de matemáticas para este nuevo curso serán
20%, 50% y 30% respectivamente. Realiza un programa que calcule la nota final de un alumno,
aplicando estos porcentajes, a partir de sus notas parciales.<br><br>";

function NotaFinal($nota1, $nota2, $nota3)
     {
        return ($nota1 * 0.20) + ($nota2 * 0.50) + ($nota3 * 0.30);
    }

$nota1 = 8;  
$nota2 = 7;  
$nota3 = 9; 
$notaFinal = NotaFinal($nota1, $nota2, $nota3);

echo "Siendo las notas del alumno $nota1, $nota2 y $nota3 respectivamente <br>";
echo "La nota final es de $notaFinal";




?>

        
</html>