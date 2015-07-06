<DOCTYPE html>
<html>
<header>
<title> </title>
<link rel="stylesheet" href="default.css">
</header>
<body>
	<form action="login.php" method="POST">
		<input type="text" name="username" a placeholder="nom d'utilisateur" autocomplete="off"><br><br>
		<input type="password" name="password" placeholder="mot de passe" autocomplete="off"><br><br>
		<input type="submit" name="login" value="Connexion"><br>
		<a href="index.html">retour</a>
	<?php
	if(isset($_GET['notify'])){
		echo $_GET['notify'];
	}
	?>
	</form>
	
</body>
</html>
