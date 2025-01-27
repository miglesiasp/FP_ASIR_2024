<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
<?php
   

        for ($i = 1; $i <= 7; $i++) {
            echo "Día $i: ";

            switch ($i) {
                case 1 :
                    echo " Lunes" . "<br>";
                break;

                case 2:
                    echo "Martes". "<br>";
                break;

                case 3:
                    echo "Miércoles" . "<br>";
                break;

                case 4:
                    echo "Jueves". "<br>";
                break;

                case 5:
                    echo "Viernes". "<br>";
                break;

                case 6:
                    echo "Sábado"."<br>";
                break;

                case 7:
                    echo " Domingo"."<br>";
                break;

            }
        }
    
   
?>

</html>
