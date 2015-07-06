<?php

//Appel du fichier de connexion
require_once('connexion_db.php');
$idmatch=$_GET['idmatch'];
$sql="select * from matchs where idmatch='$idmatch'";
$rep=mysql_query($sql) or die(mysql_error());

$matchs=mysql_fetch_object($rep);
?>
<!DOCTYPE html>
<html>
<head> 
    <title>Inscription</title>
    <link rel="stylesheet" href="default.css">
</head>
<body>
<form action="inscrp_vote.php" method="post">
    <h2> Inscription</h2>
    <div class="field">
        <label>NOM</label>
        <input type="text" name="nom" value="">
    </div>
    
    <div class="field">
        <label>Numero</label>
        <input type="tel" name="numero" value="">
    </div>
    <div id="boutons">
        <input type="hidden" name="" value="">
        <input type="submit" name="envoyer"value="Envoyer">
    </div>
	<a href='paris.php'>je suis déjà inscrit</a>
</form>

<a href='matchs.php'>Retour</a>
</body>
</html>
