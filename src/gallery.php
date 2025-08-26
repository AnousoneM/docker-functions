<?php

require_once 'data/users.php';

// je créer une fonction avec 3 paramètres : $sexe et $total auront des paramètres par défaut
function createGallery($array, $sexe = "all", $total = "all")
{
    // je mets un var_dump pour controller mes params'
    // var_dump($array, $sexe, $total);

    // Je mélange mon tableau
    shuffle($array);

    // je définis une variable $max qui vaut 0 pour démarrer et qui va correspondre au nombre de photos affichées
    $max = 0;

    echo '<div class="row justify-content-center">';

    foreach ($array as $person) {

        // si la personne n'est pas du bon sexe, je ne l'affiche pas avec `continue`;
        // bien pensez à mettre en plus la condition != 'all', pour prendre en compte l'affichage par défaut
        if ($person['sexe'] != $sexe && $sexe != 'all') {
            continue;
        }

        // si nous avons atteint le maximum de photo demandées, on arrête de boucler avec `break`;
        // bien pensez à mettre en plus la condition != 'all', pour prendre en compte l'affichage par défaut
        if ($max == $total && $max != 'all') {
            break;
        }

        // j'incremente ma variable à chaque itération
        $max++;

        // je echo ma div contenant mon image et les infos
        echo '<div class="col-3 border border-secondary shadow rounded p-3 m-3">';
        echo '<img src="assets/img/' . $person['photo'] . '" class="img-fluid border mb-2" alt="' . $person['nom'] . '">';
        echo '<p class="mb-1">Nom : ' . $person['nom'] . '</p>';
        echo '<p class="mb-1">Prénom : ' . $person['prenom'] . '</p>';
        echo '</div>';
    }

    echo '</div>';
}

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

    <a href="index.php" class="text-center py-4 bg-dark text-white h1 text-decoration-none">Custom Gallery</a>

    <main class="container py-4">

        <!-- structure de base à creer à l'aide de ma fonction
        <div class="row justify-content-center">

            <div class="col-3 border border-secondary shadow rounded p-3 m-3">
                <img src="assets/img/photo_01.jpg" class="img-fluid border mb-2" alt="Nom">
                <p class="mb-1">Nom : Jenny</p>
                <p class="mb-1">Prénom : JOSH</p>
            </div>

        </div> -->

        <!-- affichage des galleries avec différents params -->

        <p class="h2 text-center">une gallerie de 10 Femmes</p>
        <?php 
        // Appel de la fonction à l'aide des arguments nommées permettant de ne pas avoir d'erreurs
        createGallery($users, total: 10, sexe: 'Femme'); ?>
        <hr>

        <p class="h2 text-center">une gallerie de 5 Femmes</p>
        <?php createGallery($users, 'Femme', 5); ?>
        <hr>

        <p class="h2 text-center">une gallerie de 5 Hommes</p>
        <?php createGallery($users, 'Homme', 5); ?>
        <hr>

        <p class="h2 text-center">une gallerie de tous le monde</p>
        <?php createGallery($users); ?>

    </main>

    <footer class="bg-dark text-white text-center mt-auto py-4">
        <p class="m-3">Afpa 2K25 - SuperGlobale - Session</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>