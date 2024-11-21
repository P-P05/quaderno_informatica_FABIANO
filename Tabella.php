<!DOCTYPE html>
<html>
<head>
    <title>Tabella Pitagorica</title>
</head>
<body>
    <h1>Tabella Pitagorica</h1>

    <?php
    // Imposta il numero massimo
    $max = 10; // Puoi cambiare questo valore

    echo "<table border='1'>";

    // Intestazione
    echo "<tr><th>*</th>";
    for ($i = 1; $i <= $max; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    // Corpo della tabella
    for ($r = 1; $r <= $max; $r++) {
        echo "<tr>";
        echo "<th>$r</th>";
        for ($c = 1; $c <= $max; $c++) {
            echo "<td>" . ($r * $c) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="it">

   
    
    <!-- Pulsante per tornare al sommario -->
    <button onclick="location.href='index.html'">Torna al Sommario</button>

</html>
