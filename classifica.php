<?php
include 'config.php';

$result = $conn->query("SELECT nome, punti FROM Studente ORDER BY punti DESC");

if (!$result) {
    die("Errore nella query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classifica Studenti</title>
</head>
<body>
    <h2>Classifica Studenti</h2>
    <table border="1">
        <tr><th>Nome</th><th>Punti</th></tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr><td><?= htmlspecialchars($row["nome"]) ?></td><td><?= $row["punti"] ?></td></tr>
        <?php } ?>
    </table>
    <a href="http://localhost/informatica/">
        <button type="button">Torna alla Home</button>
    </a>
</body>
</html>
