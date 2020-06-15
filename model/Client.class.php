<?php
class Client
{
	private $userc;
	private $adresse;
	private $passc;
	private $tauxremise;
	private $role;

public function __construct()
{
	$this->idclient=0;
	$this->userc="";
	$this->adresse="";
	$this->passc="";
	$this->tauxremise=20;
	$this->role=2;
}



public function getUserc()
{
	return $this->userc;
}

public function setUserc($userc)
{
$this->userc=$userc;
}

public function getadresse()
{
	return $this->adresse;
}

public function setadresse($adresse)
{
$this->adresse=$adresse;
}

public function getPassc()
{
	return $this->passc;
}

public function setPassc($passc)
{
$this->passc=$passc;
}

public function gettauxremise()
{
	return $this->tauxremise;
}

public function settauxremise($tauxremise)
{
$this->tauxremise=$tauxremise;
}
public function getRole()
{
	return $this->role;
}

public function setrole($role)
{
$this->role=$role;
}
}
?>