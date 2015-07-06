<?php
//Appel du fichier de connexion
require_once('connexion_db.php');
inscrp_vote
//Récupérationn des données du formulaire (par post)
$nom=$_POST['nom'];
$entraineur=$_POST['entraineur'];
$president=$_POST['president'];
$fondation=$_POST['fondation'];
$site=$_POST['site'];
$siege=$_POST['siege'];
$tel=$_POST['tel'];
$effectif=$_POST['effectif'];
$palmares=$_POST['palmares'];
$parcours=$_POST['parcours'];

//extract($_POST); équivaut aux 5 lignes précédentes

//Définition de la requte
$sql_ajout="INSERT INTO info VALUES ('$nom','$entraineur','$president','$fondation','$site',".
"'$siege','$tel','$effectif','$palmares','$parcours')";
	

//Exécution de la requête
$query_ajout=mysql_query($sql_ajout) or die(mysql_error());
if($query_ajout){
    echo"<h2>L'equipe $nom a été ajouté dans la base</h2>";
   // echo"<a href='liste_pilotes.php'>Liste des pilotes</a>";
}
?>