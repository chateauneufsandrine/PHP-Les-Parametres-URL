<!-- EXERCICE2////////////////////////////////////////////////////////////////////////////
Faire une page index.php. Tester sur cette page que le paramètre age existe 
et si c'est le cas l'afficher sinon le signaler : 
index.php?lastname=Nemare&firstname=Jean -->

<?php 

// var_dump($_GET);
// exit();


if (isset($_GET["age"])) {
    $age = $_GET["age"];
    var_dump($_GET);
    exit();
} else {
    var_dump("l'âge n'existe pa dans l'URL, il faut le rajouter");
    exit();
}


// if (isset($_GET['age'])) {
//      "Âge : " . htmlspecialchars($_GET['age']);
// } else {
//     echo "Le paramètre 'age' n'existe pas.";
// }

?>






