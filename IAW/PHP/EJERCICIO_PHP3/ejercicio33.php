<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 33</title>
</head>
<body>
    <h3>Imprimir los números primos comprendidos en un rango entre dos números dados. El primer
    número será el límite inferior y el segundo el límite superior</h3>
    
    <form action="ejercicio33.php" method="POST">
    <label for="valor1">Límite inferior:  </label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Límite superior: </label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <button type="submit">Calcular</button>
    </form>
    </form>

    <?php
        
        
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
    
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
    
            return true;
        }
    
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
    
            if ($valor1 > $valor2) {
                echo "<p>El límite inferior no puede ser mayor que el límite superior. Intente de nuevo.</p>";
            } else {
                
                echo "Números primos entre $valor1 y $valor2" . "<br>";
    
                $encontrado = false; 
                for ($i = $valor1; $i <= $valor2; $i++) {
                    if (esPrimo($i)) {
                        echo $i . " ";
                        $encontrado = true;
                    }
                }
    
               
                if (!$encontrado) {
                    echo "No se encontraron números primos en el rango";
                }
            }
        }
    
    ?>
</body>
</html>