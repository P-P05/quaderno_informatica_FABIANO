<?php
include 'config.php';

// Se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeStudente = $_POST["nomeStudente"];
    $punti = $_POST["punti"];
    $nomeDocente = $_POST["nomeDocente"];
    $nomeCorso = $_POST["nomeCorso"];

    // Inserisci il docente
    $conn->query("INSERT INTO Docente (nome) VALUES ('$nomeDocente')");
    $docente_id = $conn->insert_id;

    // Inserisci il corso
    $conn->query("INSERT INTO Corso (nome, docente_id) VALUES ('$nomeCorso', '$docente_id')");
    $corso_id = $conn->insert_id;

    // Inserisci lo studente
    $conn->query("INSERT INTO Studente (nome, punti) VALUES ('$nomeStudente', '$punti')");

    echo "Dati inseriti con successo!";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Dati</title>
</head>
<body>
    <h2>Inserisci Nuovi Dati</h2>
    <form method="POST" action="">
        <label>Nome Studente:</label>
        <input type="text" name="nomeStudente" required><br><br>

        <label>Punti:</label>
        <input type="text" name="punti" required style="appearance: none; -moz-appearance: textfield; -webkit-appearance: none;"><br><br>

        <label>Nome Docente:</label>
        <input type="text" name="nomeDocente" required><br><br>

        <label>Nome Corso:</label>
        <input type="text" name="nomeCorso" required><br><br>

        <button type="submit">Inserisci</button>
    </form>
    </a>
    <a href="http://localhost/simulazione_2prova/classifica.php">
        <button type="button">classifica</button>
    </a>
</body>
</html>
