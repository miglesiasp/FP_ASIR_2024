<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
<form action="ejercicio18.php" method="post">
        <label for="numero">Primer número:</label>
        <input type="number" step="any" name="numero" id="numero" required><br><br>
        

        <input type="submit" value="Resultado">
    </form>

    <?php
        echo "Escribir un programa que lea un número entero e imprima todos los números impares menores
        que él." . "<br>" . "<br>";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
                $numero = (int) $_POST['numero'];
        
                echo "Los números impares menores que $numero son: " . "<br>";
                
                for ($i = 1; $i < $numero; $i++) {
                  
                    if ($i % 2 != 0) {
                        echo $i . "<br>";
                    }
                }
            } else {
                echo "Por favor, ingresa un número válido.";
            }
        }
    ?>

   
</html>