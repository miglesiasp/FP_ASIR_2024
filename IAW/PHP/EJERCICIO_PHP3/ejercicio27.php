<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
<body>
    <h3> Calcular áreas </h3>

    <h5> Trapecio </h5>
    <form action="ejercicio27.php" method="POST">
        <input type="hidden" name="figura" value="trapecio">
        <label for="mayor"> Base mayor</label><br>
        <input type="number" id="mayor" name="mayor" required>
        <label for="menor"> Base menor </label>
        <input type="number" id="menor" name="menor" required>
        <label for="altura"> Altura </label>
        <input type="number" id="altura" name="altura" required>
        <br>
        <button type="submit"> Resultado </button>
    </form> <hr>

    <h5> Triángulo</h5>
    <form action="ejercicio27.php" method="POST">
        <input type="hidden" name="figura" value="triangulo">
        <label for="ancho2"> Ancho </label><br>
        <input type="number" id="ancho2" name="ancho2" required>
        <label for="largo2"> Largo </label>
        <input type="number" id="largo2" name="largo2" required>
        <br>
        <button type="submit"> Resultado </button>
    </form> <hr>

    <h5> Cuadrado </h5>
    <form action="ejercicio27.php" method="POST">
        <input type="hidden" name="figura" value="cuadrado">
        <label for="lado1"> Longitud </label><br>
        <input type="number" id="lado1" name="lado1" required>
        <br>
        <label for="lado2"> Longitud </label><br>
        <input type="number" id="lado2" name="lado2" required>
        <br>
        <button type="submit"> Resultado </button>
    </form> <hr>

    <h5> Rectángulo </h5>
    <form action="ejercicio27.php" method="POST">
        <input type="hidden" name="figura" value="rectangulo">
        <label for="ancho"> Ancho </label><br>
        <input type="number" id="ancho" name="ancho" required>
        <label for="largo"> Largo </label>
        <input type="number" id="largo" name="largo" required>
        <br>
        <button type="submit"> Resultado </button>
    </form> <hr>

    <h5> Círculo </h5>
    <form action="ejercicio27.php" method="POST">
        <input type="hidden" name="figura" value="circulo">
        <label for="radio"> Radio </label><br>
        <input type="number" id="radio" name="radio" required>
        <br>
        <button type="submit"> Resultado </button>
    </form> <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $figura = $_POST['figura'];

        switch ($figura) {

            case 'trapecio':
                if (isset($_POST['mayor']) && isset($_POST['menor']) && isset($_POST['altura'])) {
                    $mayor = $_POST["mayor"];
                    $menor = $_POST["menor"];
                    $altura = $_POST["altura"];
                    $areaTrapecio = (($mayor + $menor) * $altura) / 2;
                    echo "El área del trapecio es: " . $areaTrapecio . " unidades cuadradas.";
                }
                break;

            case 'triangulo':
                if (isset($_POST['ancho2']) && isset($_POST['largo2'])) {
                    $ancho2 = $_POST["ancho2"];
                    $largo2 = $_POST["largo2"];
                    $areaTriangulo = ($ancho2 * $largo2) / 2;
                    echo "El área del triángulo es: " . $areaTriangulo . " unidades cuadradas.";
                }
                break;

            case 'cuadrado':
                if (isset($_POST["lado1"]) && isset($_POST["lado2"])) {
                    $lado1 = $_POST["lado1"];
                    $lado2 = $_POST["lado2"];
                    $areaCuadrado = $lado1 * $lado2;
                    echo "El área del cuadrado es: " . $areaCuadrado . " unidades cuadradas.";
                }
                break;

            case 'rectangulo':
                if (isset($_POST['ancho']) && isset($_POST['largo'])) {
                    $ancho = $_POST["ancho"];
                    $largo = $_POST["largo"];
                    $areaRectangulo = $ancho * $largo;
                    echo "El área del rectángulo es: " . $areaRectangulo . " unidades cuadradas.";
                }
                break;

            case 'circulo':
                if (isset($_POST['radio'])) {
                    $radio = $_POST['radio'];
                    $areaCirculo = pi() * $radio * $radio;
                    echo "El área del círculo es: " . $areaCirculo . " unidades cuadradas.";
                }
                break;

            default:
                echo "Figura no válida.";
                break;
        }
    }
    ?>
</body>
</html>
