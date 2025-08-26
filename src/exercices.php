<?php

// fonction qui dit bonjour
function direBonjour()
{
    return 'Bonjour et bienvenue';
}

// fonction qui salue
function saluer($prenom)
{
    echo "Bonjour, $prenom !<br>";
}

// fonction qui calcule le carré
function carre($nombre)
{
    return $nombre * $nombre;
}

// fonction qui Vérifier un nombre pair
function estPair($nombre)
{
    if ($nombre % 2 == 0) {
        echo "le nombre $nombre est pair";
    } else {
        echo "le nombre $nombre est impair";
    }
}

// fonction Calculer la somme de deux nombres
function somme($a, $b){
    echo "La somme de $a + $b = " . $a + $b;
}

// fonction Trouver le maximum de deux nombres
function maximum($a, $b){
    if ($a > $b) {
        echo "le nombre le plus grand entre $a et $b, est $a";
    } else {
        echo "le nombre le plus grand entre $a et $b, est $b";
    }
}

// fonction Trouver le maximum d’une série de nombres
function maximumMulti(...$allNumbers){
    var_dump($allNumbers);
    echo "Le nombre le plus grand, est " . max($allNumbers);
}

// fonction Compter les lettres d’une chaîne
function longueur($string){
    echo "Le nombre de lettre dans le mot : $string est de " . strlen($string);
}




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercices : Fonctions </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <h1 class="text-center py-4 bg-primary text-white">Les Functions</h1>

    <main class="container py-4">

        <div class="row justify-content-center">
            <p>Exercice 1</p>
            <p><?= direBonjour() ?></p>

            <p>Exercice 2</p>
            <p><?php saluer("Anousone");
                saluer("Kevin");
                saluer("Sarah") ?></p>

            <p>Exercice 3</p>
            <p>Le carré du nombre : 3 est <?= carre(3) ?></p>

            <p>Exercice 4</p>
            <p><?php estPair(15) ?></p>

            <p>Exercice 5</p>
            <p><?php somme(1,9) ?></p>

            <p>Exercice 6</p>
            <p><?php maximum(13,9) ?></p>

            <p>Exercice 6bis</p>
            <p><?php maximumMulti(13,9, 99, 56, 44, 33, 90, 7) ?></p>

            <p>Exercice 7</p>
            <p><?php longueur('anticonstitutionnellement') ?></p>

        </div>

    </main>

    <footer class="bg-primary text-white text-center mt-auto py-4">
        <p class="m-3">Afpa 2K25 - SuperGlobale - Session</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>