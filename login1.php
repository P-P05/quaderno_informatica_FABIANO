<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

// Credenziali di accesso valide
$validUsername = "Giuseppe";
$validPassword = "1312";

// Controllo se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Recupero delle credenziali inserite dall'utente
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controllo delle credenziali
    if ($username == $validUsername && $password == $validPassword) {
        // Accesso riuscito
        echo "<h1>Benvenuto, $username!</h1>"; 
    } else {
        // Accesso negato
        echo "<p style='color: red;'>Credenziali errate, riprova.</p>"; 
        mostraForm(); // Visualizza nuovamente il modulo
    }
} else {
    // Se il modulo non è stato inviato, mostra il modulo di login
    mostraForm();
}

// Funzione per mostrare il modulo di login
function mostraForm() {
    echo '
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Accedi</button>
    </form>
    ';
}
?>

<!-- Pulsante per tornare alla pagina principale -->
<button onclick="location.href='index.html'">Torna al Sommario</button> 

</body>
</html>
