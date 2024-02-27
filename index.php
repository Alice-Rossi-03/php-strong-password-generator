<!-- Milestone 1
- Creare un form che invii in GET la lunghezza della password. 
- Una nostra funzione utilizzerà questo dato per generare una password casuale composta da 
  - lettere 
  - lettere maiuscole
  - numeri
  - simboli
- Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
- Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->

<?php

    // length value
    $psw_length=$_GET['psw_length']; 

    // psw value
    $password=''; 
    
    // before the function lets check if its set
    if($psw_length !== 0){ 

        // including the function
        include_once __DIR__ .'/partials/function.php';
        $password = getRanPsw($psw_length);

    };

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>

    <!-- link to bs css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header class="text-center my-4 w-50 mx-auto">
        <h1 class="fw-bolder">Strong Password Generator</h1>
        <h3 class="text-secondary-emphasis opacity-50">Get Your Random "Safe" Password</h3>

        <hr>
    </header>

    <main>
        <div class="text-center my-4 w-50 mx-auto">
            <form action="index.php" method="GET">
                <label for="length">Length Of The Psw:</label>
                <input type="number" min="8" max="20" id="length" name="psw_length">
                <button type="submit" class="btn btn-danger text-center ms-3">GET PSW</button>
            </form>
            <hr>

            <h3 class="text-secondary-emphasis opacity-50">Your Password is...</h3>

            <div class="bg-warning rounded-3 p-3 mt-3 fs-4 text-dark"><?php echo $password; ?></div>

        </div>
    </main>

    <!-- link to bs js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

