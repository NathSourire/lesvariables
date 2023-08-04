<?php
$lastname = 'Ossart';
$firstname = 'Nathalie';
$age = '47';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 2</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 2</h1>
            <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  Afficher leur contenu.</p>
        </div>
    </header>
    <main class="container- fluid" >
        <div class="row results" >
        <div class=" col-4 ">
            <?php
            echo "Mon nom est $lastname";
            ?>
        </div>
        <div class=" col-4 ">
            <?php
            echo "Mon Prénom est $firstname";
            ?>
        </div>
        <div class=" col-4 ">
            <?php
            echo "Mon Age est $age";
            ?>
        </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>