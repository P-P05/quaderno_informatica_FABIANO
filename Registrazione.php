<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo di Registrazione</title>
</head>
<body>
    <h2>Modulo di Registrazione</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Raccolta dei dati dal modulo
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $data_nascita = $_POST['data_nascita'];
        $codice_fiscale = $_POST['codice_fiscale'] ?: "Non fornito";
        $email = $_POST['email'];
        $cellulare = $_POST['cellulare'];

        // Preparazione del formato per la registrazione
        $registrazione = "$nome,$cognome,$data_nascita,$codice_fiscale,$email,$cellulare\n";

        // Salvataggio dei dati nel file registrazioni.txt
        $file = "registrazioni.txt";
        if (file_put_contents($file, $registrazione, FILE_APPEND | LOCK_EX)) {
            echo "<p>Registrazione avvenuta con successo!</p>";
        } else {
            echo "<p>Errore durante il salvataggio dei dati.</p>";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" required><br><br>

        <label for="data_nascita">Data di Nascita:</label>
        <input type="date" id="data_nascita" name="data_nascita" required><br><br>

        <label for="codice_fiscale">Codice Fiscale (opzionale):</label>
        <input type="text" id="codice_fiscale" name="codice_fiscale"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="cellulare">Cellulare:</label>
        <input type="text" id="cellulare" name="cellulare" required><br><br>

        <button type="submit">Invia</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="it">

   
    
    <!-- Pulsante per tornare al sommario -->
    <button onclick="location.href='index.html'">Torna al Sommario</button>

</html>

