<?php
//Appel du fichier de connexion
require_once('connexion_db.php');
//Définition de la requête
$sql="select idinf,nom,entraineur,president,fondation,siege from info";

$rep=mysql_query($sql) or die(mysql_error());

/*session_start();

	if($_SESSION['username'] || $_SESSION['password']){
		$usename = $_SESSION['username']
		echo "vous etes connecté en tant que" .$_SESSION['username'];
		echo "<a href='logout.php'>deconnexion</a>";
		echo "<title>$username</title>";
	}else{
		header("header:admin.php?notify=Oop!")
	}*/
	
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
			<h1>Administration</h1>
			<h2><a href="logout.php">deconnexion</a></h2>
		</div>
		<nav>
			<ul>
				<li><a href="acceuiladmin.php">Acceuil</a></li>
				<li><a href="admequipes.php">Liste equipes</a></li>
				<li><a href="admmatchs.php">Liste matchs</a></li>
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
						
					</tr>
				<?php
					while($equipes=mysql_fetch_object($rep)){
					echo"<tr>
							<td>$equipes->nom</td>
							<td>$equipes->entraineur</td>
							<td>$equipes->president</td>
							<td>$equipes->fondation</td>
							<td>$equipes->siege</td>
							
						</tr>";
					}
				?>
				</table>
				
			</article>
		</section>
		
		<footer>
		<div id="tweet">
			<p>
				<a href="ajoutequipe.php">Ajout d'équipe</a>
			</p>
		</div>
			
		</footer>
	</div>	
	</body>
</html>