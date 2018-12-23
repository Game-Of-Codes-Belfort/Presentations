<?php 
					//AFFICHER LES DONNeES DE LA BDD//


	require_once 'conection.php';
	require_once 'header.php';
	head('base de données','kiwi');




$requete = $bdd->prepare('SELECT * FROM formu');

$resultIsOk=$requete->execute();

if($resultIsOk == true){
	echo'Tout est ok'.'<br>';
}
else{
	echo 'Allo Houston on a un probleme';
};

$result=$requete->fetchAll();





?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>LISTE DES CONTACTS</title>
</head>

<body>
	<h1>Liste des contacts</h1>
	<ul>
		Les noms, Email et les prénoms des contacts
		
		<li> 
			<?php foreach ( $result as $value){
				
				echo $value['last_name'].'-'?>

				<?php  echo $value['first_name'] .' '.'&'?>

				<?php echo $value['email'].' '.'&' ?>
				
				<?php echo $value['departement']?>

				<a href="supprimer.php $_GET['numContact']=
				<?= $value['id'] ?>">supression</a><br>
				
				<?php

				};

			?> 

			
		</li>




	</ul>
	
</body>
</html>

