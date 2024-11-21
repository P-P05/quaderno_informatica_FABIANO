<?php
// Verifica se il form è stato inviato e se c'è un valore per N
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    $N = (int)$_POST['numero']; // Ottieni il valore N dal form
} else {
    $N = null; // Se non è stato inviato il form, N sarà nullo
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
        <!-- Form per inserire il numero N -->
        <form method="POST" action="">
            <label for="numero">Scegli un numero da 1 a 10:</label>
            <select name="numero" id="numero">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
            <button type="submit">Crea tabella</button>
        </form>
    <?php else: ?>
        <!-- Tabella dei quadrati e cubi -->
        <h2>Tabella dei Quadrati e Cubi (da 1 a <?= $N ?>)</h2>
        <table border="1">
            <tr>
                <th>Numero</th>
                <th>Quadrato</th>
                <th>Cubo</th>
            </tr>
            <?php for ($i = 1; $i <= $N; $i++): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $i * $i ?></td>
                    <td><?= $i * $i * $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</body>
</html>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Progetto 1</title>
</head>
<body>
    
    <!-- Pulsante per tornare al sommario -->
    <button onclick="location.href='index.html'">Torna al Sommario</button>
</body>
</html>
