<<!DOCTYPE html>
<html lang="it"> 
<head>
    <title>Pagina PHP</title>
</head>
<body>
    <?php
    // Variabili iniziali
    $nome = "Paolo";
    $ora = date("H");

    // Determinazione del saluto in base all'orario
    if ($ora >= 8 && $ora < 12) {
        $saluto = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $saluto = "Buonasera";
    } else {
        $saluto = "Buonanotte";
    }

    // Riconoscimento browser
    $browser = $_SERVER['HTTP_USER_AGENT'];

    // Messaggi di benvenuto e browser
    echo "<p>$saluto $nome, benvenuto/a nella mia pagina PHP!</p>";
    echo "<p>Stai usando il browser: $browser</p>";
    ?>
    
    <!-- Pulsante per tornare alla pagina principale -->
    <button onclick="location.href='index.html'">Torna al Sommario</button> 
</body>
</html>

