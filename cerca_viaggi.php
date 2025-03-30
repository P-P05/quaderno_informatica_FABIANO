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

if (isset($_POST['citta_partenza']) && isset($_POST['citta_destinazione']) && isset($_POST['data'])) {
    $citta_partenza = $_POST['citta_partenza'];
    $citta_destinazione = $_POST['citta_destinazione'];
    $data = $_POST['data'];

    // Query per cercare i viaggi disponibili in base ai criteri
    $sql = "SELECT * FROM viaggi WHERE citta_partenza = '$citta_partenza' AND citta_destinazione = '$citta_destinazione' AND data_partenza >= '$data' AND prenotazione_chiusa = 0";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca Viaggi</title>
</head>
<body>
    <h1>Ricerca Viaggi Disponibili</h1>
    <form method="POST">
        <label for="citta_partenza">Città di Partenza:</label>
        <input type="text" id="citta_partenza" name="citta_partenza" required><br>

        <label for="citta_destinazione">Città di Destinazione:</label>
        <input type="text" id="citta_destinazione" name="citta_destinazione" required><br>

        <label for="data">Data di Partenza (yyyy-mm-dd):</label>
        <input type="date" id="data" name="data" required><br>

        <input type="submit" value="Cerca Viaggi">
    </form>

    <?php if (isset($result)): ?>
        <?php if ($result->num_rows > 0): ?>
            <h2>Viaggi Disponibili:</h2>
            <ul>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li>
                        <strong>Città di Partenza:</strong> <?php echo $row['citta_partenza']; ?><br>
                        <strong>Città di Destinazione:</strong> <?php echo $row['citta_destinazione']; ?><br>
                        <strong>Data di Partenza:</strong> <?php echo $row['data_partenza']; ?><br>
                        <strong>Orario di Partenza:</strong> <?php echo $row['orario_partenza']; ?><br>
                        <strong>Contributo Economico:</strong> <?php echo $row['contributo_economico']; ?> €
                        <br><br>
                        <a href="prenotazione.php?id_viaggio=<?php echo $row['id']; ?>">Prenota questo Viaggio</a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>Nessun viaggio trovato per i criteri selezionati.</p>
        <?php endif; ?>
    <?php endif; ?>

    <br>
    <a href="index.php">Torna alla Home</a>
</body>
</html>
