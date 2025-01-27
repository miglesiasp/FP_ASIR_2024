
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con Memoria</title>
</head>
<body>
    
        <h1>Calculadora con Memoria</h1>
        <form method="post" action="">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" value="<?php echo isset($num1) ? $num1 : ''; ?>" required>

            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" value="<?php echo isset($num2) ? $num2 : ''; ?>" required>

            <label for="operation">Operación:</label>
            <select name="operation" id="operation" required>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
                <option value="potencia">Potencia</option>
            </select>

            <button type="submit" name="calcular">Calcular</button>
            <button type="submit" name="guardar_memoria">Guardar en Memoria</button>
            <button type="submit" name="usar_memoria">Usar Memoria como Número 1</button>
        </form>

        <?php
            
            session_start();

            if (!isset($_SESSION['memory'])) {
                $_SESSION['memory'] = 0;
            }
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                $result = 0;

                switch ($operation) {
                    case 'sumar':
                        $result = $num1 + $num2;
                        break;
                    case 'restar':
                        $result = $num1 - $num2;
                        break;
                    case 'multiplicar':
                        $result = $num1 * $num2;
                        break;
                    case 'dividir':
                        $result = ($num2 != 0) ? $num1 / $num2 : "Error: División por cero";
                        break;
                    case 'potencia':
                        $result = pow($num1, $num2);
                        break;
                    default:
                        $result = "Operación no válida";
                        break;
                }

                if (isset($_POST['guardar_memoria'])) {
                    $_SESSION['memory'] = $result;
                }

                if (isset($_POST['usar_memoria'])) {
                    $num1 = $_SESSION['memory'];
                }
            }
            
            ?>

        
            <?php
            if (isset($result)) {
                echo "Resultado: " . $result . "<br>";
                echo "Memoria: " . $_SESSION['memory'];
            }
            ?>
        
</body>
</html>