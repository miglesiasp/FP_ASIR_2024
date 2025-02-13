<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo del jornal diario</title>
</head>
<body>
    <h1>Cálculo del jornal diario</h1>
    <form method="post">
        <label for="nombre">Nombre del empleado:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="horas">Horas trabajadas:</label>
        <input type="number" name="horas" min="0" required><br><br>

        <label for="turno">Turno:</label>
        <select name="turno" required>
            <option value="diurno">Diurno</option>
            <option value="nocturno">Nocturno</option>
        </select><br><br>

        <label for="festivo">¿Es festivo?</label>
        <select name="festivo" required>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select><br><br>

        <input type="submit" value="Calcular jornal">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nombre = $_POST['nombre'];
        $horas = $_POST['horas'];
        $turno = $_POST['turno'];
        $festivo = $_POST['festivo'];

        $tarifaDiurna = 10;
        $tarifaNocturna = 13.5;

        
        if ($turno == 'diurno') {
            $jornal = $horas * $tarifaDiurna;
            if ($festivo == 'si') {
                $jornal *= 1.10; 
            }
        } elseif ($turno == 'nocturno') {
            $jornal = $horas * $tarifaNocturna;
            if ($festivo == 'si') {
                $jornal *= 1.15;
            }
        } else {
            $jornal = 0; 
        }

       
        echo "Resultado: ";
        echo "<p>Nombre del empleado: $nombre</p>";
        echo "<p>Jornal diario: €" . number_format($jornal, 2) . "</p>";
}
    ?>
</body>
</html>