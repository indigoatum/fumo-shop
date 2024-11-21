<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de promedio</title>
      <link rel="stylesheet" href="promedio.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de promedio</h1>

        <form method="get">
            <b>
            <label for="calificacion1">Calificación 1:</label>
            <input type="number" name="calificacion1" min="0" max="10" step="0.01" required>
            
            <label for="calificacion2">Calificación 2:</label>
            <input type="number" name="calificacion2" min="0" max="10" step="0.01" required>
            
            <label for="calificacion3">Calificación 3:</label>
            <input type="number" name="calificacion3" min="0" max="10" step="0.01" required>
            
            <label for="calificacion4">Calificación 4:</label>
            <input type="number" name="calificacion4" min="0" max="10" step="0.01" required>
            
            <label for="calificacion5">Calificación 5:</label>
            <input type="number" name="calificacion5" min="0" max="10" step="0.01" required>
            
            <label for="calificacion6">Calificación 6:</label>
            <input type="number" name="calificacion6" min="0" max="10" step="0.01" required>
            
            <button type="submit">Calcular promedio</button>
            </b>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['calificacion1'])) {
            $calificacion1 = $_GET['calificacion1'];
            $calificacion2 = $_GET['calificacion2'];
            $calificacion3 = $_GET['calificacion3'];
            $calificacion4 = $_GET['calificacion4'];
            $calificacion5 = $_GET['calificacion5'];
            $calificacion6 = $_GET['calificacion6'];

            $promedio = ($calificacion1 + $calificacion2 + $calificacion3 + $calificacion4 + $calificacion5 + $calificacion6) / 6;
            echo "<div id='resultado'>El promedio es: " . number_format($promedio, 2) . "</div>";
        }
        ?>
    </div>
</body>
</html>



