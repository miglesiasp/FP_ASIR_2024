<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <h3> Pasar de dígitos a números romanos y viceversa </h3>
    <form method= "POST">
        <label for=num> Introduce un dígito: </label>
        <input type="number" id="num" name="num" min="0" max="9" required>
        <button type="submit"> Convertir de decimal a romano </button>
    </form>

    <form method="POST">
    <label for="romano">Introduce una letra romana:</label>
    <input type="text" id="romano" name="romano" required>
    <button type="submit">Convertir de romano a decimal</button>
</form>
</body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (isset($_POST['num']) && is_numeric($_POST['num'])) {
           
            $num = (int) $_POST['num'];
            
            switch ($num) {
                case 0:
                    echo "El número $num en letra es: cero";
                    break;
                case 1:
                    echo "El número $num en letra es: I";
                    break;
                case 2:
                    echo "El número $num en letra es: II";
                    break;
                case 3:
                    echo "El número $num en letra es: III";
                    break;
                case 4:
                    echo "El número $num en letra es: IV";
                    break;
                case 5:
                    echo "El número $num en letra es: V";
                    break;
                case 6:
                    echo "El número $num en letra es: VI";
                    break;
                case 7:
                    echo "El número $num en letra es: VII";
                    break;
                case 8:
                    echo "El número $num en letra es: VIII";
                    break;
                case 9:
                    echo "El número $num en letra es: IX";
                    break;
                default:
                    echo "Número no válido";
                    break;
            }
        }

        if (isset($_POST['romano'])) {
            $romano = ($_POST['romano']);
            switch ($romano) {
                case 'I':
                    echo "El valor decimal de $romano es: 1";
                    break;
                case 'V':
                    echo "El valor decimal de $romano es: 5";
                    break;
                case 'X':
                    echo "El valor decimal de $romano es: 10";
                    break;
                case 'L':
                    echo "El valor decimal de $romano es: 50";
                    break;
                case 'C':
                    echo "El valor decimal de $romano es: 100";
                    break;
                case 'D':
                    echo "El valor decimal de $romano es: 500";
                    break;
                case 'M':
                    echo "El valor decimal de $romano es: 1000";
                    break;
                default:
                    echo "No es un número romano válido";
                    break;
            }
        }
                
    }
?>

</html>