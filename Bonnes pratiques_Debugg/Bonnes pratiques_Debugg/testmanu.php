<?php
  require 'conection.php';
  require_once 'header.php';
  head('FORMULAIRE','wiki');

?>



<form action="inserer_form.php" method="POST">


  <input type="text" name="last_name" placeholder="last_name">

  <input type="text" name="first_name" placeholder="first_name" >

  <input type="email" name="email" placeholder="email">

  <select name="departement" >

    <option value="montbeliard">Montbeliard</option>

    <option value="departement_belfort">Departement de Belfort</option>

    <option value="haute_saone">Haute Saône</option>

    <option value="alsace">Alsace</option>

  </select>

  <input type="submit" value="envoyer">

</form>




