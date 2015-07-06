<?php
//Appel du fichier de connexion
require_once('connexion_db.php');

//Définition de la requête
$sql="select idmatch,equipe1,equipe2,date from matchs";
$rep=mysql_query($sql) or die(mysql_error());
//Récupérationn des données du formulaire (par post)
$nom=$_POST['nom'];
$tel=$_POST['numero'];

//extract($_POST); équivaut aux 5 lignes précédentes

//Définition de la requte
$sql_ajout="INSERT INTO inscrit VALUES (NULL,'$nom','$tel')";
	

//Exécution de la requête
$query_ajout=mysql_query($sql_ajout) or die(mysql_error());
if($query_ajout){
    echo"<h2>L'equipe $nom a été ajouté dans la base</h2>";
    echo"<a href='matchs.php'>les matchs</a>";
   require_once('smsreceiver.php');
}
?>