<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati Utente</title>
</head>
<body>
    <h1>Dati Inseriti</h1>

    <!-- Lista dei dati inseriti dall'utente tramite il form -->
    <ul>
        <!-- Stampa ogni valore del modulo utilizzando htmlspecialchars per prevenire attacchi XSS -->
        <li>Nome: <?php echo htmlspecialchars($_POST['nome']); ?></li>
        <li>Cognome: <?php echo htmlspecialchars($_POST['cognome']); ?></li>
        <li>Data di nascita: <?php echo htmlspecialchars($_POST['data_nascita']); ?></li>
        <li>Email: <?php echo htmlspecialchars($_POST['email']); ?></li>
        <li>Via/Piazza: <?php echo htmlspecialchars($_POST['indirizzo_via']); ?></li>
        <li>CAP: <?php echo htmlspecialchars($_POST['indirizzo_cap']); ?></li>
        <li>Comune: <?php echo htmlspecialchars($_POST['indirizzo_comune']); ?></li>
        <li>Provincia: <?php echo htmlspecialchars($_POST['indirizzo_provincia']); ?></li>
        <li>Nickname: <?php echo htmlspecialchars($_POST['nickname']); ?></li>
        <li>Password: <?php echo htmlspecialchars($_POST['password']); ?></li>
    </ul>

    <!-- Pulsante per tornare al Sommario -->
    <button onclick="location.href='index.html'">Torna al Sommario</button>
</body>
</html>
