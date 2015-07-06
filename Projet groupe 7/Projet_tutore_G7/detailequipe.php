<?php
//Appel du fichier de connexion
require_once('connexion_db.php');
//Définition de la requête
$idinf=$_GET['idinf'];
$sql="select * from info where idinf='$idinf'";
$rep=mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title> </title>
	</head>
	
	<body>
	<div id="bloc_page">
		<header>
			<div id="titre_principal">
			<h1>Pali</h1>
			<h2>Paris en ligne</h2>
		</div>
		<nav>
			<ul>
				<li><a href="index.html">Acceuil</a></li>
				<li><a href="equipes.php">Equipes</a></li>
				<li><a href="matchs.php">Matchs</a></li>
			</ul>
		</nav>
		</header>
		
		<section>
			<article>
			 	<table>
            <caption>Liste des pilotes</caption>
            <tr>
                <th>Nom</th>
                <th>Parcours</th>
                <th>Palmares</th>
                <th>Effectif</th>
            </tr>
			<?php
					while($equipes=mysql_fetch_object($rep)){
					echo"<tr>
							<td>$equipes->nom</td>
							<td>$equipes->parcours</td>
							<td>$equipes->palmares</td>
							<td>$equipes->effectif</td>
						</tr>";
					}
				?>
        </table>
			</article>
			
			<aside>
				<h1>Article</h1>
					<p>
						<img src="images/facebook.png" alt="Facebook" />
						<img src="images/twitter.png" alt="Twitter" />
						<img src="images/vimeo.png" alt="Vimeo" />
						<img src="images/flickr.png" alt="Flickr" />
						<img src="images/rss.png" alt="RSS" />
					</p>
			</aside>
		</section>
		
		<footer>
		<div id="tweet">
			<p>Copyright - Tous droits réservés 
				<a href="admin.php">Admin</a>
			</p>
		</div>
			
		</footer>
	</div>	
	</body>
</html>