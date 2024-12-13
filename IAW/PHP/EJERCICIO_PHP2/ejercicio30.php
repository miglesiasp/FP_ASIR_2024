<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
<?php
 echo ". A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora. Si la
cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50%
para las horas extras. Calcular el salario del trabajador dadas las horas trabajadas y la tarifa.<br><br>";

function calculo ($horastrabajadas, $tarifahora) 
    {
   
    if ($horastrabajadas > 40) {
        
        $horas = 40;
        $horasExtras = $horastrabajadas - 40;
        
        $salario = ($horas * $tarifahora) + ($horasExtras * $tarifahora * 1.5);
    } else {
        
        $salario = $horastrabajadas * $tarifahora;
    }
    
    return $salario;    
    
    }


$horastrabajadas = 45;  
$tarifahora = 20;    

$salario = calculo ($horastrabajadas, $tarifahora);

echo "El salario del trabajador seria $salario euros";
?>

        
</html>