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
<form action="paris_vote.php" method="post">
    <h2> Paris</h2>
    <div class="field">
        <label>NOM</label>
        <input type="text" name="nom" value="">
    </div>
    
    <div class="field">
        <label>Numero</label>
        <input type="tel" name="numero" value="">
    </div>
    <div class="field">
        <label>id matchs</label>
        <input type="text" name="idmatch" value="<?php echo $idmatch->idmatch ?>" >
    </div>
    <div id="boutons">
        <input type="hidden" name="" value="">
        <input type="submit" name="envoyer"value="Envoyer">
    </div>
</form>
<a href='matchs.php'>annuler</a>
</body>
</html>
