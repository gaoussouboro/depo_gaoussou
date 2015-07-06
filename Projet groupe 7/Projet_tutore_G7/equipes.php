<?php
//Appel du fichier de connexion
require_once('connexion_db.php');
//Définition de la requête
$sql="select idinf,nom,entraineur,president,fondation,siege from info";
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
				<caption>Liste des equipes</caption>
					<tr>
						<th>NOM</th>
						<th>Entraineur</th>
						<th>President</th>
						<th>Fondation</th>
						<th>Siege</th>
						<th>Details</th>
					</tr>
				<?php
					while($equipes=mysql_fetch_object($rep)){
					echo"<tr>
							<td>$equipes->nom</td>
							<td>$equipes->entraineur</td>
							<td>$equipes->president</td>
							<td>$equipes->fondation</td>
							<td>$equipes->siege</td>
							<td><a href='detailequipe.php?idinf=$equipes->idinf'>Details</a></td>
						</tr>";
					}
				?>
				</table>
				
			</article>
			
			<aside>
				<h1>Articles</h1>

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