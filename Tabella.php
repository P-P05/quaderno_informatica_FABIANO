<!DOCTYPE html>
<html lang="it"> 
<head>
    <title>Tabella Pitagorica</title>
</head>
<body>
    <h1>Tabella Pitagorica</h1> 

    <?php
    $max = 10; // Dimensione massima della tabella (10x10)
    echo "<table border='1'>";

    // Crea l'intestazione della tabella (numeri da 1 a 10 in alto)
    echo "<tr><th>*</th>"; 
    for ($i = 1; $i <= $max; $i++) { 
        echo "<th>$i</th>"; 
    }
    echo "</tr>"; 

    // Crea le righe della tabella
    for ($r = 1; $r <= $max; $r++) { 
        echo "<tr>";
        echo "<th>$r</th>"; // Intestazione laterale con i numeri da 1 a 10
        for ($c = 1; $c <= $max; $c++) { 
            echo "<td>" . ($r * $c) . "</td>"; // Calcolo del prodotto r * c
        }
        echo "</tr>";
    }

    echo "</table>"; 
    ?>
    
    <button onclick="location.href='index.html'">Torna al Sommario</button> <!-- Pulsante per tornare alla pagina principale -->
</body>
</html>

