<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
    <h3>Números primos comprendidos entre el 1 y el 100</h3>
    
    <?php

        function primo ($num) {
            if ($num <= 1) {
                return false;
            }

            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
        return true;
        }

        for ($i = 2; $i <= 100; $i++) {
            if (primo($i)) {
                echo $i . " ";
            }
        }
    ?>
</body>
</html>