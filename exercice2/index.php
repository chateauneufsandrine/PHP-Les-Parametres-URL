<!-- EXERCICE2////////////////////////////////////////////////////////////////////////////
Faire une page index.php. Tester sur cette page que le paramètre age existe 
et si c'est le cas l'afficher sinon le signaler : 
index.php?lastname=Nemare&firstname=Jean -->

<?php 

var_dump($_GET);



if (isset($_GET["age"])) {
    $age = $_GET["age"];
    var_dump($_GET);
    exit();
} else {
    var_dump("l'âge n'existe pas dans l'URL");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?lastname=Nemare&firstname=Jean">Accueil</a>
</body>
</html>





