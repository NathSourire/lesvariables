<?php
$km = '1';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 3</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 3</h1>
            <p>Créer une variable km. L'initialiser à 1. Afficher son contenu. </p>
            <p>Changer sa valeur par 3. Afficher son contenu. </p>
            <p>Changer sa valeur par 125. Afficher son contenu.</p>
        </div>
    </header>
    <main class="">
        </div class="row">
                <!-- <?php
                // $kms = array('1', '3', '150');
                // foreach ($kms as $key => $km) {
                //     echo $km . ' kms' . '<br />';
                // }
                ?> -->
            <p class="results">
                <?php echo "$km km"; ?><br>
                <?php $km = 3;echo "$km km"; ?><br>
                <?php $km = 150;echo "$km km"; ?></p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>