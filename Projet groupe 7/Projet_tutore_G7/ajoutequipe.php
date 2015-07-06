<?php
//Appel du fichier de connexion
require_once('connexion_db.php');
//Définition de la requête
$idinf=$_GET['idinf'];
$sql="select * from info where idinf='$idinf'";
$rep=mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html>

<html>
<head> 
    <title>Ajout d'une équipe</title>
    <link rel="stylesheet" href="default.css">
</head>
<body>
<form action="ajoutEquipes.php" method="post">
    <h2> Ajouter une nouvelle equipe</h2>
    <div class="field">
        <label>NOM</label>
        <input type="text" name="nom" value="">
    </div>
	<div class="field">
        <label>Entraineur</label>
        <input type="text" name="entraineur" value="">
    </div>
	<div class="field">
        <label>President</label>
        <input type="text" name="president" value="">
    </div>
    <div class="field">
        <label>Fondation</label>
        <input type="text" name="fondation" value="">
    </div>
	<div class="field">
        <label>Site</label>
        <input type="text" name="site" value="">
    </div>
    <div class="field">
        <label>Siege</label>
        <textarea name="siege"></textarea>
    </div>
    <div class="field">
        <label>Téléphone</label>
        <input type="tel" name="tel" value="">
    </div>
    <div class="field">
        <label>Effectif</label>
        <input type="number_format" name="effectif" value="">
    </div>
	<div class="field">
        <label>palmares</label>
        <input type="text" name="palmares" value="">
    </div>
	<div class="field">
        <label>Parcours</label>
        <input type="text" name="parcours" value="">
    </div>
    <div id="boutons">
        <input type="hidden" name="annuler" value="">
        <input type="submit" name="envoyer" value="Envoyer">
    </div>
</form>	
	<a href='liste_pilotes.php'>Liste des pilotes</a>
</body>
</html>
