<?php

//recupération du message envoyé par l'utilisateur
$nom=$_GET['body'];
$num=$_GET['from'];
$match=$_GET['id'];
$equipe=$_GET['equipe'];

$couper[0]=incr;

$couper=explode(" ",$nom);
$motclef=$couper[0];
$b=$couper[1];
$c=$couper[2];
$d=' ';
 
//Mettez le nom du serveur ou le numero
$dbhost = "localhost";
//Mettez le nom d'utilisateur pour l'accès à la base de données
$dbuser = "root";
//Mettez le mot de passe pour l'accès à la base de données
$dbpass = "";
//Mettez le nom de la base de données
$dbname = "projet_tutore";

//Connexion
mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname) or die(mysql_error());



	if($motclef==vote){
		$requete="insert into sms_votes values ('','$match','$b$d$c','$num','$equipe')";
		$a=mysql_query($requete) or die(mysql_error());
		if($a){
			echo"insertion reussie";
		}else{
		echo"echec insertion";
		}

	}else{
	echo"erreur!!";
	}         
?>
