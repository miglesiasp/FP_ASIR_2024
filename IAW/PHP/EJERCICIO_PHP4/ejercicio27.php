<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial de cada numero</title>
</head>
<body>
    <h1>Factorial de cada numero</h1>
    <form method="POST">
        <label for="num1">Introduce el primer número: </label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Introduce el segundo número: </label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Ver factoriales">
    </form>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if ($num1 <= $num2) {
            factoriales_rango($num1, $num2);
        } 
    }
    
    function factorial($n) {
        if ($n == 0) return 1;
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
    
   
    function factoriales_rango($num1, $num2) {
        for ($i = $num1; $i <= $num2; $i++) {
            echo "El factorial de $i es: " . factorial($i) . "<br>";
        }
    }
    ?>
</body>
</html>