<?php
require_once '../model/ConnexionBD.class.php';
require_once '../model/Produit.class.php';
class ProduitDao{

	public static function GetAllProduit()
	{
		$connexionbd=new ConnexionBD();
		$listproduit=$connexionbd->query("select * from Produit");
		return $listproduit->fetchall();
	}

public static function AddNewProduit($Produit)
{
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("insert into produit values('".$Produit->getreferance()."','".$Produit->getquantite()."','".$Produit->getdescription()."','".$Produit->getprix()."' )");
}
public static function UpdateProduit($produit)
{
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("update produit set 	quantite= '".$produit->getquantite()."', description='".$produit->getdescription()."', prix='".$produit->getprix()."' where reference='".$produit->getreferance()."'");

}
public static function Getproduit($reference)
{
	$connexionbd=new ConnexionBD();
	$produit=$connexionbd->query("select * from produit where reference=$reference");
 return  $produit->fetchObject();
}	

public static function Deleteproduit($reference)
{
	$connexionbd=new ConnexionBD();

	return $connexionbd->exec("delete from produit where reference=$reference");
}
}
?>