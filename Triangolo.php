<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli con PHP</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
<?php
$n = 10; 


for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<br>';


for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<br>';


for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= ($n - $i); $j++) {
        echo '&nbsp;';
    }
    for ($k = 1; $k <= $i; $k++) {
        echo '*';
    }
    echo '<br>';
}
echo '<br>';

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= ($n - $i); $j++) {
        echo '&nbsp;';
    }
    for ($k = 1; $k <= $i; $k++) {
        echo '*';
    }
    echo '<br>';
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="it">

   
    
   
    <button onclick="location.href='index.html'">Torna al Sommario</button>

</html>
