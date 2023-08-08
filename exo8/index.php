<?php
$sum = 3 + 4;
$multiply = 5 * 20;
$divide = 45 / 5;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 8</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 8</h1>
            <p>Créer 3 variables.</p>
            <p>Afficher le contenu des variables. </p>
            <p>Dans la première mettre le résultat de l'opération 3 + 4.</p>
            <p>Dans la deuxième mettre le résultat de l'opération 5 * 20.</p>
            <p>Dans la troisième mettre le résultat de l'opération 45 / 5.</p>
        </div>
    </header>
    <main class="container- fluid">
        <div class="row ">
            <div class="">
                <p class="results" >
                <?php
                echo '3 + 4 = '  .$sum.'<br>';
                echo '5 * 20 = ' .$multiply.'<br>';
                echo '45 / 5 = ' .$divide.'<br>';
                ?>
                </p>
            </div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>