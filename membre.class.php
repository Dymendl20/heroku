<?php

class Membre
{
	private $pseudo;
	private $email;
	private $actif;

	public function __construct($pseudo)
	{
		$this->pseudo = $pseudo;
		$this->actif = true;
	}

	public function getPseudo() // Accesseur : permet d'accéder au pseudo
	{
		return $this->pseudo;
	}

	public function setPseudo($pseudo) // Mutateur : d e modifier pseudo
	{
		$this->pseudo = $pseudo;
	}

	public function bannir()
	{
		$this->actif = false;
	}

	public function debannir()
	{
		$this->actif = true;
	}
}

?>