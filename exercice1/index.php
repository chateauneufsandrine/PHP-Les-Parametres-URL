<!-- EXERCICE1////////////////////////////////////////////////////////////////////////////////////
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL
 existent et les afficher: index.php?lastname=Nemare&firstname=Jean -->

 <?php 
 

var_dump($_GET);

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
 
 