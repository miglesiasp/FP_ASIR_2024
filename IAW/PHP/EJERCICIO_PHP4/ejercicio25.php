<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Devolver los primos anteriores a un numero N</title>
</head>
<body>
    <h1>Número primos anteriores a N</h1>
    <form method="post">
        <label for="numero"> Número:</label>
        <input type="number" name="numero" required><br><br>
        <input type="submit" value="Comprobar">
    </form>
    <?php
    
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $primos = primos_anteriores($numero);
        if (count($primos) > 0) {
            echo "Los primos anteriores a $numero son: " . implode(", ", $primos);
        } else {
            echo "No hay primos anteriores a $numero.";
        }
    }
    function es_primo($n) {
        if ($n <= 1) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function primos_anteriores($n) {
        $primos = [];
        for ($i = 2; $i < $n; $i++) {
            if (es_primo($i)) {
                $primos[] = $i;
            }
        }
        return $primos;
    }
    ?>
</body>
</html>