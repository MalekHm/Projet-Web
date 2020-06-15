<?php
class Produit
{
	private $referance;
	private $quantite;
	private $description;
	private $prix;


public function __construct()
{
	$this->referance="";
	$this->quantite="";
	$this->description="";
	$this->prix="";

}

public function getreferance()
{
	return $this->referance;
}

public function setreferance($referance)
{
$this->referance=$referance;
}

public function getdescription()
{
	return $this->description;
}

public function setdescription($description)
{
$this->description=$description;
}

public function getquantite()
{
	return $this->quantite;
}

public function setquantite($quantite)
{
$this->quantite=$quantite;
}

public function getprix()
{
	return $this->prix;
}

public function setprix($prix)
{
$this->prix=$prix;
}
}
?>