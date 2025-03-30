<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ultima Gara e Risultati</title>
</head>
<body>
    <h1>Ultima Gara e Risultati</h1>

    <?php
    // Recupera l'ultima gara ordinando per data in ordine decrescente
    $gara_query = "SELECT * FROM gara ORDER BY data DESC LIMIT 1";
    $gara_result = $conn->query($gara_query);
    $gara = $gara_result->fetch_assoc();

    if ($gara) {
        echo "<h2>Gara: {$gara['nome']} ({$gara['data']} - {$gara['luogo']})</h2>";

        // Recupera i risultati dell'ultima gara
        $risultati_query = "SELECT risultato.posizione, pilota.nome, pilota.cognome, casa_automobilistica.nome AS casa
                            FROM risultato
                            JOIN pilota ON risultato.pilota_id = pilota.id
                            JOIN casa_automobilistica ON pilota.casa_id = casa_automobilistica.id
                            WHERE risultato.gara_id = {$gara['id']}
                            ORDER BY risultato.posizione ASC";

        $risultati_result = $conn->query($risultati_query);

        if ($risultati_result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Posizione</th>
                        <th>Pilota</th>
                        <th>Casa Automobilistica</th>
                    </tr>";

            while ($row = $risultati_result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['posizione']}</td>
                        <td>{$row['nome']} {$row['cognome']}</td>
                        <td>{$row['casa']}</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Non ci sono risultati per questa gara.</p>";
        }
    } else {
        echo "<p>Non ci sono gare registrate.</p>";
    }
    ?>
</body>
</html>
