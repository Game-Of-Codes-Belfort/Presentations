<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description" content="Tutoriels sur l'utilisation de la variable $_SERVER">
    <meta property="og:title" content="Initiation au PHP">
    <meta property="og:description" content="Tutoriels sur l'utilisation de la variable $_SERVER">
    <link rel="stylesheet" type="text/css" href="server.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit');
    </style>

    <title>$_SERVER</title>

</head>

<header>  <img src="mini_ACS.jpg" alt="logo ACS" id="acs"> <h1>Présentation d'une variable PHP</h1></header>

<body>

<div class="def">
<div class="marges">
<h2>La variable $_SERVER</h2>
<h4>Définition :</h4>
<p>La variable $_SERVER, c'est une variable de type SUPER GLOBALE.Les Superglobales — 
    Les Superglobales sont des variables internes qui sont toujours disponibles, quel que soit le contexte. Comme :</p>
<li>$GLOBALS</li>
<li>$_GET</li>
<li>$_POST</li>
<li>$_REQUEST</li>
<li>$_FILES</li>
<li>$_COOKIE</li>
<li>$_SESSION</li>
<p>$_SERVER est un tableau contenant des informations créees par le serveur web.</p>
<p>On peut y trouver l'adresse du script exécutée, l'adresse IP du client et du serveur.</p>

<p>Liste des index les plus utiles :</p>

<img src="liste1.png" alt="details index">
<img src="liste2.png" alt="details index">
<br>
<br>
<a href="http://php.net/manual/fr/reserved.variables.server.php">Plus d'infos Ici !</a>
<a href="https://www.w3schools.com/php/php_superglobals.asp">More & more here !</a>

</div>
</div>

<div class="ex">
<div class="marges">
<h3>Exemples</h3>
<h4>Exemple sur W3C SCHOOL :</h4>
<img src="exserver.png" alt="exemple info server" class="img">
<a href="https://www.w3schools.com/php/showphp.asp?filename=demo_global_server">Link</a>
<br>
<br>

<h4>Exemple depuis ma page PHP :</h4>

<p>Le code en PHP :</p>
<p class=exemple>echo $_SERVER['PHP_SELF'];<br>
echo $_SERVER['SERVER_NAME'];<br>
echo $_SERVER['HTTP_HOST'];<br>
echo $_SERVER['HTTP_REFERER'];<br>
echo $_SERVER['HTTP_USER_AGENT'];<br>
echo $_SERVER['SCRIPT_NAME'];<br>
echo $_SERVER['REQUEST_METHOD'];<br>
echo $_SERVER['REMOTE_ADDR'];<br>
echo $_SERVER['SERVER_PORT'];</p>


<p>Le résultat :</p>
<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
?>



</div>
</div>


<footer>Réalisé par ALexandra Moullet, Lundi 29 octobre 2018 
</footer>

</body>



</html>