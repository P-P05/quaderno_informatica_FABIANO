<?php
$conn = new mysqli("localhost", "root", "", "scuola");
if ($conn->connect_error) {
    die("Errore di connessione: " . $conn->connect_error);
}
?>
