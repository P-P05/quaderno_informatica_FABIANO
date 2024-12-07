<?php
// Controllo se il modulo è stato inviato e il valore del numero è stato ricevuto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    $N = (int)$_POST['numero']; // Converte il valore del numero in un intero
} else {
    $N = null; // Se non è stato inviato nulla, il valore di $N è nullo
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella dei Quadrati e Cubi</title>
</head>
<body>

<?php if ($N === null): ?>
    <!-- Se il numero non è stato selezionato, mostra il modulo per scegliere un numero -->
    <form method="POST" action="">
        <label for="numero">Scegli un numero da 1 a 10:</label>
        <select name="numero" id="numero">
            <!-- Ciclo per creare le opzioni del menu a tendina (numeri da 1 a 10) -->
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit">Crea tabella</button>
    </form>

<?php else: ?>
    <!-- Se il numero è stato selezionato, mostra la tabella dei quadrati e cubi -->
    <h2>Tabella dei Quadrati e Cubi (da 1 a <?= $N ?>)</h2>
    <table border="1">
        <tr>
            <th>Numero</th>
            <th>Quadrato</th>
            <th>Cubo</th>
        </tr>
        <!-- Ciclo per generare la riga della tabella per ogni numero da 1 a N -->
        <?php for ($i = 1; $i <= $N; $i++): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $i * $i ?></td>
                <td><?= $i * $i * $i ?></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php endif; ?>

<!-- Pulsante per tornare alla pagina principale -->
<button onclick="location.href='index.html'">Torna al Sommario</button> 

</body>
</html>
