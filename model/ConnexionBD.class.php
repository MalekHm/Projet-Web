<?php
class ConnexionBD{

	private $host;
	private $dbname;
	private $user;
	private $password;
	private $connexion;

	public function __construct()
	{
		$this->host="localhost";
		$this->dbname="alimentation";
		$this->user="root";
		$this->password="";
		$this->connexion=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
	}

	function query($sql)
	{
		return $this->connexion->query($sql);
	}

	function exec($sql)
	{
		return $this->connexion->exec($sql);
	}
}
?>