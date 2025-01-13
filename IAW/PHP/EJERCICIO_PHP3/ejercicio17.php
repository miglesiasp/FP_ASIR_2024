<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
<form action="ejercicio17.php" method="post">
        <label for="num1">Primer número:</label>
        <input type="number" step="any" name="num1" id="num1" required><br><br>
        
        <label for="num2">Segundo número:</label>
        <input type="number" step="any" name="num2" id="num2" required><br><br>

        <label for="num3">Tercer número:</label>
        <input type="number" step="any" name="num3" id="num2" required><br><br>

        <input type="submit" value="Resultado">
    </form>

    <?php
        echo "Diseña un algoritmo que pida por teclado tres números; si el primero es negativo, debe
        imprimir el producto de los tres y si no lo es, imprimirá la suma" . "<br>" . "<br>";

            if ($_SERVER ["REQUEST_METHOD"] == "POST") {
                
            
                    $num1 = $_POST ["num1"];
                    $num2 = $_POST ["num2"];
                    $num3 = $_POST ["num3"];

                        if ($num1 < 0) {
                            $resultado = $num1 * $num2 * $num3;
                            echo "El producto de los tres números es: $resultado";
                        } else {
                            $resultado = $num1 + $num2 + $num3;
                            echo "La suma de los tres números es: $resultado";
                        }
            }
    ?>

   
</html>