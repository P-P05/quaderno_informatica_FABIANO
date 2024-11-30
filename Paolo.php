<?php

$nome = "Paolo";


$ora = date("H");
if ($ora >= 8 && $ora < 12) {
    $saluto = "Buongiorno";
} elseif ($ora >= 12 && $ora < 20) {
    $saluto = "Buonasera";
} else {
    $saluto = "Buonanotte";
}


$browser = $_SERVER['HTTP_USER_AGENT'];


echo "<p>$saluto $nome, benvenuta nella mia prima pagina PHP!</p>";
echo "<p>Stai usando il browser: $browser</p>";
?>
<!DOCTYPE html>
<html lang="it">

   
    
    
    <button onclick="location.href='index.html'">Torna al Sommario</button>

</html>
