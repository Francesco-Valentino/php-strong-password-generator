<?php 

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
                    <form>
                        <div class="mb-3">
                            <label for="lengthInput" class="form-label">Lunghezza password</label>
                            
                            <input type="email" class="form-control" id="lengthInput" aria-describedby="inputHelp">
                            
                            <div id="inputHelp" class="form-text">Il valore inserito determinerà la lunghezza della password. Molti caratteri, molta sicurezza.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Genera password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>