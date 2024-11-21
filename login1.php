<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php
// Credenziali predefinite
$validUsername = "Giuseppe";
$validPassword = "1312";

// Se il form è stato inviato (POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera i dati inviati
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica le credenziali
    if ($username == $validUsername && $password == $validPassword) {
        echo "<h1>Benvenuto, $username!</h1>"; // Messaggio di successo
    } else {
        echo "<p style='color: red;'>Credenziali errate, riprova.</p>"; // Messaggio di errore
        mostraForm(); // Riproponi il form
    }
} else {
    // Mostra il form se la pagina è appena caricata
    mostraForm();
}

// Funzione per mostrare il form di login
function mostraForm() {
    echo '
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Accedi</button>
    </form>
    ';
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="it">
<body>
    
    <!-- Pulsante per tornare al sommario -->
    <button onclick="location.href='index.html'">Torna al Sommario</button>
</body>
</html>
