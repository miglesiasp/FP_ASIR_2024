<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
    <h3>Calculadora </h3>
    <form action="ejercicio26.php" method= "POST">
        <label for=num> Introduce un dígito: </label><br>
        <input type="number" id="num" name="num" required>
        <label for=num2> Introduce un dígito </label>
        <input type="numer" id="num2" name="num2" required>
        <label for="op"> Elige una opción </label>
            <select id="op" name="op">
                <option value="+"> Suma </option>
                <option value="-"> Resta </option>
                <option value="*"> Multiplicación </option>
                <option value="/"> División </option>
        </select><br>
        <button type="submit"> Resultado </button>
    </form>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST['num'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
            
        switch ($op) {
            case "+":
                $resultado = $num + $num2;
            break;
            case "-":
                $resultado = $num - $num2;
            break;
            case "*":
                $resultado = $num + $num2;
            break;
            case "/":
                $resultado = $num / $num2;
            break;

            default:
                echo "Operación no válida";
        }

        echo "El resultado de $num $op $num2 es $resultado";
    }

?>