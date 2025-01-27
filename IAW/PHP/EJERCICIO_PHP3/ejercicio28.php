<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<body>
    <h3>Comparar Áreas de Dos Triángulos</h3>
    
    <form action="ejercicio28.php" method="POST">
        <h5>Primer Triángulo</h5>
        <label for="base1">Base del primer triángulo:</label><br>
        <input type="number" id="base1" name="base1" required><br>
        <label for="altura1">Altura del primer triángulo:</label><br>
        <input type="number" id="altura1" name="altura1" required><br><br>
        
        <h5>Segundo Triángulo</h5>
        <label for="base2">Base del segundo triángulo:</label><br>
        <input type="number" id="base2" name="base2" required><br>
        <label for="altura2">Altura del segundo triángulo:</label><br>
        <input type="number" id="altura2" name="altura2" required><br><br>

        <button type="submit">Calcular Áreas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $base1 = $_POST["base1"];
        $altura1 = $_POST["altura1"];
        
        $area1 = ($base1 * $altura1) / 2;

        
        $base2 = $_POST["base2"];
        $altura2 = $_POST["altura2"];
      
        $area2 = ($base2 * $altura2) / 2;

       
        echo "Área del primer triángulo: " . $area1 . " unidades cuadradas" . "<br>";
        echo "Área del segundo triángulo: " . $area2 . " unidades cuadradas" . "<br>";

        
        if ($area1 > $area2) {
            echo "El primer triángulo tiene mayor área";
        } elseif ($area2 > $area1) {
            echo "El segundo triángulo tiene mayor área.";
        } else {
            echo "Ambos triángulos tienen el mismo área.";
        }
    }
    ?>
</body>
</html>
