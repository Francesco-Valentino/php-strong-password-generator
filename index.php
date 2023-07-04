<?php 
    function getPasswordbyLength($userLength){
        $pool = "0123456789ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuwxyz!?&%$.,";
        
        $poolLength = strlen($pool) - 1;

        $generatedPassword = [];

        for ($i = 0; $i < $userLength; $i++) {

            $randomValue = rand(0, $poolLength);

            $generatedPassword[] = $pool[$randomValue];
        };

        $finalPassword = implode($generatedPassword);

        return $finalPassword;
    }
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <h1 class="text-center">
            Extremely strong password generator
        </h1>

        <h2 class="text-center">
            Genera una password (abbastanza) sicura
        </h2>

        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <form action="./index.php" method="GET">
                        <div class="mb-3">
                            <label for="lengthInput" class="form-label">Lunghezza password</label>
                            
                            <input type="text" class="form-control" id="lengthInput" name="lengthInput" aria-describedby="inputHelp">
                            
                            <div id="inputHelp" class="form-text">Il valore numerico inserito determinerà la lunghezza della password. Molti caratteri, molta sicurezza.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Genera password
                        </button>
                    </form>

                    <?php if(empty($_GET["lengthInput"]) || !is_numeric($_GET["lengthInput"])){ ?>
                        <div class="my-3 p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                            Dovrai inserire un valore numerico per generare la tua nuova, <b>sicurissimissima</b> password.
                        </div>
                    <?php } else{ ?>
                        <div class="my-3 p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                            Volevi la tua password? Eccoti la tua password!
                        </div>

                        <h2>
                            <?php echo getPasswordbyLength($_GET["lengthInput"])?>
                        </h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>