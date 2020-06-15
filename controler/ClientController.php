<?php
require_once '../dao/ClientDao.php';
require_once '../model/Client.class.php';
switch ($_REQUEST['action']) {

			case 'add':
			$client=new Client();
			$client->setUserc($_REQUEST['name']);
			$client->setpassc($_REQUEST['mdp']);
            $client->setadresse($_REQUEST['email']);
         ClientDao::AddNewClient($client);
		header("location:../php/produit.php");
		break;

		case 'delete':
            $id=$_REQUEST['id'];   
            ClientDao::DeleteClient($id);
                    header("location:../php/PageAdmin.php");
    break;
}
?>