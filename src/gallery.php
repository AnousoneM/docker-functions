<?php

require_once 'data/users.php';

function createGallery($array, $sexe = "all", $total = "all")
{

    var_dump($array, $sexe, $total);
    
    $max = 0;

    foreach ($array as $person) {

        if ($person['sexe'] != $sexe && $sexe != 'all') {
            continue;
        }

        
        if ($max == $total && $max != 'all') {
            break;
        }
        
        $max++;

        echo $person['photo'];

    }
}


createGallery($users, sexe: "Femme");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery Photos </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <h1 class="text-center py-4 bg-dark text-white">Custom Gallery</h1>

    <main class="container py-4">

        <div class="row justify-content-center">
            <div class="col-3 border border-secondary shadow rounded p-3">
                <img src="assets/img/photo_01.jpg" class="img-fluid border mb-2" alt="Nom">
                <p class="mb-1">Nom : Jenny</p>
                <p class="mb-1">Prénom : JOSH</p>
            </div>
        </div>

    </main>

    <footer class="bg-dark text-white text-center mt-auto py-4">
        <p class="m-3">Afpa 2K25 - SuperGlobale - Session</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>