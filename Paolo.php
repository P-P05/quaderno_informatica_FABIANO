<?php
// Variabile per il nome
$nome = "Paolo";

// Determinazione del saluto in base all'ora
$ora = date("H");
if ($ora >= 8 && $ora < 12) {
    $saluto = "Buongiorno";
} elseif ($ora >= 12 && $ora < 20) {
    $saluto = "Buonasera";
} else {
    $saluto = "Buonanotte";
}

// Rilevamento del browser
$browser = $_SERVER['HTTP_USER_AGENT'];

// Mostra il contenuto della pagina
echo "<p>$saluto $nome, benvenuta nella mia prima pagina PHP!</p>";
echo "<p>Stai usando il browser: $browser</p>";
?>
<!DOCTYPE html>
<html lang="it">

   
    
    <!-- Pulsante per tornare al sommario -->
    <button onclick="location.href='index.html'">Torna al Sommario</button>

</html>
