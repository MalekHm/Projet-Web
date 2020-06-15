<?php
require_once '../dao/ProduitDao.php';
require_once '../model/Produit.class.php';
switch ($_REQUEST['action']) {
     case 'formadd':
		header("location:../php/insert2.php");
        break;
        case 'formupdate':
            header("location:../php/edit2.php?refproduit=".$_REQUEST['refproduit']);
            break;
			case 'add':
			$produit=new Produit();
            $produit->setreferance($_REQUEST['refproduit']);
            $produit->setquantite($_REQUEST['quantite']);
			$produit->setdescription($_REQUEST['nomp']);
            $produit->setprix($_REQUEST['prix']);
         ProduitDao::AddNewProduit($produit);
		header("location:../php/PageAdmin.php");
        break;
        case 'delete':
            $refproduit=$_REQUEST['refproduit'];   
            ProduitDao::DeleteProduit($refproduit);
                    header("location:../php/PageAdmin.php");
    break;
    case 'update':
        $produit=new Produit();
        $produit->setreferance($_REQUEST['refproduit']);
        $produit->setquantite($_REQUEST['quantite']);
        $produit->setdescription($_REQUEST['nom']);
        $produit->setprix($_REQUEST['prix']);
     ProduitDao::UpdateProduit($produit);
    header("location:../php/PageAdmin.php");
    break;    

}
?>