<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<body>
    <h3>Escribir un programa que lea 10 números enteros y luego muestre cuántos valores son
    múltiplos de 3 y cuántos son de 5, por otro lado, se deberá indicar cuantos números son múltiplos de ambos a
    la vez
.</h3>
    
    <form action="ejercicio32.php" method="POST">
    <label for="valor1">Valor 1: </label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Valor 2: </label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <label for="valor3">Valor 3: </label>
        <input type="number" id="valor3" name="valor3" required><br><br>

        <label for="valor4">Valor 4: </label>
        <input type="number" id="valor4" name="valor4" required><br><br>

        <label for="valor5">Valor 5: </label>
        <input type="number" id="valor5" name="valor5" required><br><br>

        <label for="valor6">Valor 6: </label>
        <input type="number" id="valor6" name="valor6" required><br><br>

        <label for="valor7">Valor 7: </label>
        <input type="number" id="valor7" name="valor7" required><br><br>

        <label for="valor8">Valor 8: </label>
        <input type="number" id="valor8" name="valor8" required><br><br>

        <label for="valor9">Valor 9: </label>
        <input type="number" id="valor9" name="valor9" required><br><br>

        <label for="valor10">Valor 10: </label>
        <input type="number" id="valor10" name="valor10" required><br><br>

        <button type="submit">Calcular</button>
    </form>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $multiplo3 = 0;
            $multiplo5 = 0;
            $ambos = 0;

            for ($i = 1; $i <= 10; $i++) {
                $valor = $_POST["valor$i"];

                if ($valor % 3 == 0 && ($valor % 5)== 0) {
                    $ambos++;
                }
                else if ($valor % 3 == 0) {
                    $multiplo3++;
                }
                else if ($valor % 5 == 0) {
                    $multiplo5++;
                }
                
            }
            echo "Múltiplos de 3: $multiplo3" . "<br>";
            echo "Múltiplos de 5:  $multiplo5". "<br>";
            echo "Múltiplos de ambos: $ambos";
        }
    ?>
</body>
</html>