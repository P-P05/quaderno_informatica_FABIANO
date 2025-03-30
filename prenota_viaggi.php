<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_pooling";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id_viaggio'])) {
    $id_viaggio = $_GET['id_viaggio'];

    // Recupera i dettagli del viaggio
    $sql = "SELECT * FROM viaggi WHERE id = $id_viaggio";
    $result = $conn->query($sql);
    $viaggio = $result->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati inseriti dal passeggero
        $nome_passeggero = $_POST['nome_passeggero'];
        $importo = $_POST['importo'];
        $data_prenotazione = $_POST['data_prenotazione'];
        $destinazione = $_POST['destinazione'];

        // Aggiungi la prenotazione
        $sql_prenotazione = "INSERT INTO prenotazioni (id_viaggio, nome_passeggero, importo, data_prenotazione, destinazione) 
                             VALUES ('$id_viaggio', '$nome_passeggero', '$importo', '$data_prenotazione', '$destinazione')";
        if ($conn->query($sql_prenotazione) === TRUE) {
            echo "Prenotazione effettuata con successo!";
        } else {
            echo "Errore: " . $sql_prenotazione . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazione Viaggio</title>
</head>
<body>
    <h1>Prenotazione Viaggio</h1>
    <p>Viaggio da <?php echo $viaggio['citta_partenza']; ?> a <?php echo $viaggio['citta_destinazione']; ?></p>
    <p>Data di Partenza: <?php echo $viaggio['data_partenza']; ?> - Orario: <?php echo $viaggio['orario_partenza']; ?></p>
    <p>Contributo Economico: <?php echo $viaggio['contributo_economico']; ?> €</p>
    
    <form method="POST">
        <label for="nome_passeggero">Nome Passeggero:</label>
        <input type="text" id="nome_passeggero" name="nome_passeggero" required><br>

        <label for="importo">Importo (in €):</label>
        <input type="number" id="importo" name="importo" step="0.01" required><br>

        <label for="destinazione">Destinazione (opzionale):</label>
        <input type="text" id="destinazione" name="destinazione"><br>

        <label for="data_prenotazione">Data di Prenotazione:</label>
        <input type="date" id="data_prenotazione" name="data_prenotazione" required><br>

        <input type="submit" value="Prenota">
    </form>

    <br>
    <a href="viaggi.php">Torna ai Viaggi Disponibili</a>
</body>
</html>
