<?php

/* 
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/

$passwordLength = $_GET['characters'];

function getRandomPassword($length)
{
    $allCharacters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%/()=?^*-_[]<>';
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($allCharacters) - 1);
        $randomPassword .= $allCharacters[$index];
    }

    return $randomPassword;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <h1>Password Generator</h1>
        <form action="" method="get">
            <div class="mb-3">
                <label for="characters" class="form-label">The most secure password generator</label>
                <input type="number" class="form-control" name="characters" id="characters" aria-describedby="helpId" />
                <small id="helpId" class="form-text text-muted">Type the length of the password that you want generate</small>
                <input name="Generate" id="Generate" class="btn btn-primary d-block my-2" type="submit" value="Generate" />
            </div>
        </form>

        <span class="badge rounded-pill text-bg-success"><?= 'Generated Password: ' .  getRandomPassword($passwordLength) ?></span>


    </div>

</body>

</html>