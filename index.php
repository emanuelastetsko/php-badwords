<?php

// Variabile di tipo stringa 
$song= "Giro girotondo,
casca il mondo,
casca la terra,
tutti giù per terra!
Giro girotondo,
il mare è fondo,
tonda è la terra,
tutti giù per terra!
Giro girotondo,
l’angelo è biondo,
biondo è il grano,
tutti ci sediamo!
Giro girotondo,
il pane è cotto in forno,
buona è la ciambella,
tutti giù per terra!";

// Variabile definita dall'input dell'utente 
$badWord = $_GET["censored"];

// Variabile definita da una funzione che sostituisce una parte di stringa con un nuovo valore 
$censoredSong = str_replace($badWord, "***", $song);

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <main>

            <h1>PHP Badwords Private</h1>
            <p>
                <!-- Stampa della variabile -->
                <?php echo $song; ?>
            </p>
            <p>Questa canzone è lunga 
                <!-- Stampa della funzione che calcola il numero dei caratteri di una stringa -->
                <?php echo strlen($song); ?> 
                caratteri.
            </p>

            <!-- Form attraverso il quale si può recuperare informazioni dall'utente -->
            <form method="GET">
                <input type="text" name="censored" placeholder="Inserisci la parola che vorresti censurare" size="50">
                <button>Invia</button>
            </form>

            <!-- !!!CANZONE CENSURATA!!! -->
            <h3>La canzone censurata:</h3>
            <p>
                <!-- Stampa della canzone censurata -->
                <?php echo $censoredSong; ?>
            </p>
            <p>La canzone censurata è lunga 
                <!-- Stampa della funzione che calcola il numero dei caratteri di una stringa -->
                <?php echo strlen($censoredSong); ?> 
                caratteri.
            </p>

        </main>
    </body>
</html>