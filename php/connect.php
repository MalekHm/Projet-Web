<?php

require_once("connexion.php");

session_start();

$bdd = maConnexion();
$table1="admin";
$table2="client";

if(isset($_REQUEST["name"]) && !(empty($_REQUEST["name"])))
{
	$login=$bdd->quote($_REQUEST["name"]);
	
}
else
{
	die("ajouter votre login !!!");
}

if(isset($_REQUEST["mdp"]) && !(empty($_REQUEST["mdp"])))
{
	$mdp=$bdd->quote($_REQUEST["mdp"]);
}
else
{
	die("donner votre mot de mdpe  !!!");
}



$req2="select * from $table2 where nom=$login and passc=$mdp";



$reponse2 = $bdd->query($req2) or die ($bdd->errorInfo()[2]);
$nb2=$reponse2->rowCount();


if ($nb2==0 ) 
{
	header("location: ../php/erreur.php");
}
else
{
	$ligne=$reponse2->fetchObject();
	
	if($ligne->role == 2)
	{
		$_SESSION['role']=2;
		$_SESSION['nom']=$ligne->nom;
		header("location: ../php/produit.php");
		exit;
	
	}
}

$req="select * from $table1 where email=$login and password=$mdp ";
$reponse = $bdd->query($req) or die ($bdd->errorInfo()[2]);
$nb=$reponse->rowCount();

if ( $nb==0) 
{
	header("location: ../php/erreur.php");
}
else
{
    $ligne1=$reponse->fetchObject();
	
	if($ligne1->role == 1)
	{
		$_SESSION['role']=1;
		$_SESSION['email']=$ligne1->email;
		header("location: ../php/PageAdmin.php");
		exit;
	}
}

?>