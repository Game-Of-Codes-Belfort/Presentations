<?php

$email_destinataire = "votre@email.fr";

//C'est un peu fastidieux d'utiliser $_POST[''] à chaque fois, on stock les données transmises dans des variables plus simples à utiliser.
//On en profite pour passer les valeurs dans htmlspecialchars() pour éviter l'ajout de balises
$email = htmlspecialchars($_POST['email']);
$sujet = htmlspecialchars($_POST['sujet']);
$message = htmlspecialchars($_POST['message']);

$error_message = ""; //Cette variable contiendra le ou les messages d'erreur

$canSend = true; //Un booléen qui passera à false si il y a un problème


if(!isset($message) || empty($message)) { //Si $message n'existe pas ou est vide

    $error_message .= "Veuillez remplir le champs message <br>"; //On ajoute (.= on utilise un point donc concaténation) l'info au message de retour
    $canSend = false; //Il y a un problème : On passe le booléen qui permet d'envoyer à false

}

if(!isset($sujet) || empty($sujet)) { //idem que pour message mais pour le sujet

    $error_message .= "Veuillez remplir le champs sujet <br>";
    $canSend = false;

}

if(!isset($email) || empty($email)) { //idem que pour message mais pour l'email

    $error_message .= "Veuillez remplir le champs email <br>";
    $canSend = false;

}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) { //Sinon, si le mail existe mais n'a pas un format valide
    $error_message .= "L'adresse mail renseignée n'est pas valide<br>";
    $canSend = false;
}


if(!$canSend) { //Si le booléen canSend est à false
    $error_message .= "Il y a un problème avec les informations renseignées. <a href='index.html'>Retour au formulaire</a>";
    echo $error_message;
}
else { //Si tout est bon, on tente d'envoyer

    $message = "Nouveau message de : ".$email."\n".$message; //On fait une concaténation du mail et du message pour avoir l'adresse et pouvoir répondre

    if(mail($email_destinataire,$sujet,$message)) { //la fonction mail renvoie true si le mail a été envoyé
        echo "Votre message a bien été envoyé : ". $message;
    }
    else {
        echo "echec de l'envoi. Veuillez réessayer. Si le problème persiste, merci de contacter l'administrateur";
    }

    
}


?>