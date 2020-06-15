<?php
require_once '../dao/CommandeDao.php';
require_once '../model/Commande.class.php';
switch ($_REQUEST['action']) {

			case 'add':
			$comande=new Commande();
			$comande->setdate($_REQUEST['date']);
            $comande->setnom($_REQUEST['email']);
            $comande->setreference($_REQUEST['produit']);
         comandeDao::AddNewcomande($comande);
		header("location:../php/Produit.php");
		break;

}
?>