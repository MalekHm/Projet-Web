<?php
require_once '../model/ConnexionBD.class.php';
require_once '../model/Client.class.php';
class ClientDao{

	public static function GetAllClient()
	{
		$connexionbd=new ConnexionBD();
		$listclient=$connexionbd->query("select * from client");
		return $listclient->fetchall();
	}

public static function AddNewClient($client)
{
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("insert into client values('".$client->getUserc()."','".$client->getPassc()."', '".$client->getadresse()."','".$client->gettauxremise()."','".$client->getRole()."')");
}


}
?>