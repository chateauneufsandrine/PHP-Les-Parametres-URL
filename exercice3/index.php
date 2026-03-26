<!-- EXERCICE3//////////////////////////////////////////////////////////////////////////////////
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016 -->

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
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Accueil</a>
</body>
</html>