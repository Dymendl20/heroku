<?php

	include_once('Membre.class.php');

	$robert = new Membre('Robert');

	echo $robert->getPseudo();

	$robert->setPseudo('Dymen');

	echo $robert->getPseudo();

	$robert->bannir();

	$robert->debannir();

?>