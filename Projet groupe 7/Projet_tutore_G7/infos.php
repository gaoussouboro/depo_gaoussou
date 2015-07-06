<?php
//Appel du fichier de connexion
require_once('connexion_db.php');

//Récupérationn des données (par get)

$idinf=$_GET['idinf'];

//Définition de la requête
$sql_inf="delete from pilote where idpil='$idpil'";

//ExŽcution de la requête
$query_supp=mysql_query($sql_supp) or die(mysql_error());
if($query_supp){
    header("location:liste_pilotes.php");
    exit();
}