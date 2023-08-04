<?php
$name = 'Nath';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 6</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 6</h1>
            <p>Créer une variable name et l'initialiser avec la valeur de votre choix.</p>
            <p>Afficher : Bonjour + name + , comment vas tu ?. </p>

        </div>
    </header>
    <main class="container- fluid">
        <div class="row results">
            <div class=" col-12 ">
                <p><?php echo 'Bonjour '.$name.', comment vas tu ?';?></p>
                <p>Bonjour <?php $name; ?> Comment vas tu ?</p>
                <p><?php 'Bonjour '.$name.' Comment vas tu ?'; ?></p>
                <p><?php "Bonjour $name Comment vas tu ?"; ?></p>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>