<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

$validUsername = "Giuseppe";
$validPassword = "1312";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == $validUsername && $password == $validPassword) {
        echo "<h1>Benvenuto, $username!</h1>"; 
    } else {
        echo "<p style='color: red;'>Credenziali errate, riprova.</p>"; 
        mostraForm(); 
    }
} else {
    
    mostraForm();
}


function mostraForm() {
    echo '
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Accedi</button>
    </form>
    ';
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="it">
<body>
    
   
    <button onclick="location.href='index.html'">Torna al Sommario</button>
</body>
</html>
