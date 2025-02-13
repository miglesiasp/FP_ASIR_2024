<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verficar si un número es primo</title>
</head>
<body>
    <h1>¿Es un número primo?</h1>
    <form method="post">
        <label for="numero"> Número:</label>
        <input type="number" name="numero" required><br><br>
        <input type="submit" value="Comprobar">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST['numero'];

        function siPrimo($numero) {
            if ($numero < 2) {
                return false;
            }

            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if (siPrimo($numero)) {
            echo "El número $numero es primo." . "<br>";
        } else {
            echo "El número $numero no es primo";
        }
    }
    ?>
</body>
</html>