<?php
    $canzone = "La mia vita è piena di problemi

    E io mi ci butto a capofitto

    Queste giornate piene di impegni

    Dovrei imparare a seguire il ritmo

    Giro in auto, mi muovo da solo

    Senza mezzi, è meglio, anzi peggio

    Gli immigrati rubano il lavoro

    Gli italiani rubano il parcheggio";

    $parolaCensurata = $_GET["censura"];
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bad Words</title>
    </head>
    <body>
        <h1>Propaganda</h1>
        <h3>(Fabri Fibra)</h3>

        <!-- Stampa variabile song e relativa lunghezza -->
        <p> 
            <?php echo $canzone;?>
        </p>
        <h6> 
            Questa canzone è lunga
            <?php echo strlen($canzone);?> 
            caratteri.
        </h6>

        <!-- Input utente -->
        <form action="" method="GET">
            <input type="text" name="censura" placeholder="Inserisci la parola della canzone che vorresti censurare..." size="50">
            <button>
                Invia
            </button>
        </form>

        <!-- Canzone censurata -->
        <h4>Canzone censurata:</h4>
        <p>
            <?php echo $canzoneCensurata= str_replace("$parolaCensurata", "***", $canzone) ?>
        </p>
        <h6>
            La canzone censurata è lunga 
            <?php echo strlen($canzoneCensurata);?>
            caratteri.
        </h6>

    </body>
</html>