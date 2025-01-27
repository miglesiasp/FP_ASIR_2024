
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio20.php" method="post">
    <h3><b> Implemente el algoritmo de Euclides para encontrar el mcd de dos números leídos desde teclado.</b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Primer numero" required>
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="Segundo numero" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
        while ($num1 != $num2){
            $max = max($num1, $num2);
            $min = min($num1, $num2);
            echo "Max: $max, Min: $min <br>";
            $res = $max - $min;
            $max = $res;
            $num1=$max;
            $num2=$min;
            
        }

        $mcd = $num1;
        echo "<b>El MCD es: $mcd</b>";
        
    }
    ?>
</body>
</html>