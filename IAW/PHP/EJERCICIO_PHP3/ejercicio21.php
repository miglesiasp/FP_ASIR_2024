<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolver Ecuación Cuadrática</title>
</head>
<body>
    <h3>Escriba un programa que lea los coeficientes a, b y c de una ecuación de segundo, y estudie si
    tiene o no solución. En caso positivo, las soluciones se calcularán e imprimirán en pantalla</h3>
    <form method="POST" action="ejercicio21.php">
        <label for="a">Coeficiente a:</label>
        <input type="number" id="a" name="a" required><br><br>

        <label for="b">Coeficiente b:</label>
        <input type="number" id="b" name="b" required><br><br>

        <label for="c">Coeficiente c:</label>
        <input type="number" id="c" name="c" required><br><br>

        <button type="submit">Calcular Soluciones</button>
    </form>
</body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) &&
            is_numeric($_POST['a']) && is_numeric($_POST['b']) && is_numeric($_POST['c'])) {

          
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            
            $discriminante = $b * $b - 4 * $a * $c;

           
            if ($discriminante > 0) {
                
                $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
                echo "La ecuación tiene dos soluciones diferentes: ". "<br>";
                echo "x1 = $x1<br>";
                echo "x2 = $x2<br>";
            } elseif ($discriminante == 0) {
                
                $x = -$b / (2 * $a);
                echo "La ecuación tiene una solución doble: ". "<br>";
                echo "x = $x<br>";
            } else {
                
                echo "La ecuación no tiene soluciones." . "<br>";
            }
        } else {
            
            echo "Por favor, ingresa coeficientes válidos.";
        }
    }
?>

</html>