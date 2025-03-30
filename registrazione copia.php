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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $documento_identita = $_POST['documento_identita'];

    $sql = "INSERT INTO passeggeri (nome, email, documento_identita) VALUES ('$nome', '$email', '$documento_identita')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registrazione completata con successo!";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione Passeggero</title>
</head>
<body>
    <h1>Registrati come Passeggero</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="documento_identita">Documento di Identità:</label>
        <input type="text" id="documento_identita" name="documento_identita" required><br>

        <input type="submit" value="Registrati">
    </form>
</body>
</html>

