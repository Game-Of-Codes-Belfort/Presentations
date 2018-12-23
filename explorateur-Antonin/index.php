<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php



if(isset($_GET['dossier']) && !empty($_GET['dossier'])) {
    $chemin = $_GET['dossier']; //Si on a une info dans $_GET['dossier'], c'est le chemin qu'on va scanner
}
else {
    $chemin = "."; //Sinon, si il n'y a rien dans $_GET, c'est la première visite de l'explorateur : on scan le dossier courant
}

$dossier = scandir($chemin); //On scan le chemin demandé



foreach ($dossier as $key => $file) { //la boucle qui passe sur chaque fichier du dossier courant

    if(is_dir($chemin.'/'.$file)) {
        echo '<a href="?dossier='.$chemin.'/'.$file.'">'.$file.'</a><br>'; //Si c'est un dossier, on fait un lien vers notre fichier php d'explorateur avec l'info du chemin à scanner en GET (le href commence par ? donc il n'y a pas d'URL, juste des variables GET, ça rapelle le même fichier)
    }
    else {
        echo '<a target="_blank" href="'.$chemin.'/'.$file.'">'.$file.'</a><br>'; //Sinon, ce n'est pas un dossier : on fait un lien direct vers le fichier (avec target="_blank" pour ouvrir dans un nouvel onglet)
    }
    
}


/******* Il est utile de connaitre le chemin réel des fichiers (/var/www/html/... ou C:/wamp64/www/....) *******/

$chemin_reel = realpath("index.php"); //On récupère le chemin réel d'index.php, par exemple c:/wamp64/www/explorateur/index.php
$chemin_reel = str_replace("index.php","",$chemin_reel); //On enlève "index.php" pour obtenir un chemin du type c:/wamp64/www/explorateur/
echo $chemin_reel;
?>

</body>
</html>