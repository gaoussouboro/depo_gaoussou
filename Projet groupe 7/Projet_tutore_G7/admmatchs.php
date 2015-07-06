<?php
//Appel du fichier de connexion
require_once('connexion_db.php');
//Définition de la requête
$sql="select idmatch,equipe1,equipe2,date from matchs";

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
			<h1>Administrateur</h1>
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
            <caption>Listes matchs</caption>
            <tr>
                <th>Equipe 1</th>
                <th></th>
                <th>Equipe 2</th>
                <th>Date</th>
              
            </tr>
			<?php
            while($pilote=mysql_fetch_object($rep)){
                echo"<tr>
                        <td>$pilote->equipe1</td>
                        <td>VS</td>
                        <td>$pilote->equipe2</td>
						<td>$pilote->date</td>
                    </tr>";
            }
            ?>
           
        </table>
			</article>
			 
		</section>
		
		<footer>
		<div id="tweet">
			<p> 
				<a href="ajoutmatch.php">ajoute de match</a>
			</p>
		</div>
			
		</footer>
	</div>	
	</body>
</html>