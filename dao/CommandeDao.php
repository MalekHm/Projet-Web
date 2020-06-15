<?php
require_once '../model/ConnexionBD.class.php';
require_once '../model/commande.class.php';
class comandeDao{

	public static function GetAllcomande()
	{
		$connexionbd=new ConnexionBD();
		$listcomande=$connexionbd->query("select * from comande");
		return $listcomande->fetchall();
	}

public static function AddNewcomande($comande)
{
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("insert into comande values('".$comande->getdate()."', '".$comande->getnom()."','".$comande->getreference()."' )");
}
}
?>