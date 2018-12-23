

<?php
	require 'conection.php';

									///////////////////////////////////////////
										// INSERER VALEURS DU FORMULAIRE//

	// var_dump($_POST);


$requete = $bdd->prepare('INSERT INTO formu(last_name, first_name, email, departement) VALUES (? ,? ,? ,?)');

//on reccupere le booleen de la methode execute et  grace a une varible qui reccupere la valeur true ou false,
// on peut savoir si la requete préparée est passée ://

//execute renvoie un booleen 0 ou 1

$requeteIsOk = $requete->execute(array($_POST['last_name'], $_POST['first_name'], $_POST['email'], $_POST['departement']));



if($requeteIsOk){
	$message = 'message envoyé avec succes';
}
else{
	$message = 'Houston vous avez un problème!!! ';
};



echo $message;



?>
