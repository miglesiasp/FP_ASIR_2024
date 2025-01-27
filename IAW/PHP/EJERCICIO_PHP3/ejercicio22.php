<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Factorial</title>
</head>
<body>
    <h1>Calcular el Factorial de un Número</h1>
    <form method="POST" action="ejercicio22.php">
        <label for="n">Introduce un número:</label>
        <input type="number" id="n" name="n" required><br><br>
        <button type="submit">Calcular Factorial</button>
    </form>
</body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (isset($_POST['n']) && is_numeric($_POST['n'])) {
           
            $n = (int) $_POST['n'];

                if ($n < 0) {
                    echo "El factorial solo está definido para números enteros no negativos.";
                } else {
                
                    $factorial = 1;

                    
                    if ($n == 0 || $n == 1) {
                        $factorial = 1;
                    } else {
                        for ($i = 2; $i <= $n; $i++) {
                            $factorial *= $i;  
                        }
                    }

                    
                    echo "El factorial de $n es: $factorial";
                }
        } else {
            echo "Por favor, ingresa un número válido.";
        }
    }
?>

</html>
