<?php
class Commande
{
	
	private $date;
	private $nom;
	private $reference;

public function __construct()
{
	$this->date="";
	$this->nom="";
	$this->reference="";
}


public function getdate()
{
	return $this->date;
}

public function setdate($date)
{
$this->date=$date;
}

public function getnom()
{
	return $this->nom;
}

public function setnom($nom)
{
$this->nom=$nom;
}

public function getreference()
{
	return $this->reference;
}

public function setreference($reference)
{
$this->reference=$reference;
}
}
?>