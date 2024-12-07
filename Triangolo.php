<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli con PHP</title>
    <style>
        body {
            font-family: monospace; /* Usa un font a larghezza fissa per allineare correttamente i simboli */
        }
    </style>
</head>
<body>

<?php
$n = 10; // Dimensione massima dei triangoli

// Triangolo rettangolo crescente (a sinistra)
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<br>';

// Triangolo rettangolo decrescente (a sinistra)
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<br>';

// Triangolo rettangolo decrescente (a destra)
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= ($n - $i); $j++) {
        echo '&nbsp;'; // Spazi vuoti per allineare le stelle a destra
    }
    for ($k = 1; $k <= $i; $k++) {
        echo '*';
    }
    echo '<br>';
}
echo '<br>';

// Triangolo rettangolo crescente (a destra)
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= ($n - $i); $j++) {
        echo '&nbsp;'; // Spazi vuoti per allineare le stelle a destra
    }
    for ($k = 1; $k <= $i; $k++) {
        echo '*';
    }
    echo '<br>';
}
?>

<!-- Pulsante per tornare alla pagina principale -->
<button onclick="location.href='index.html'">Torna al Sommario</button>

</body>
</html>
