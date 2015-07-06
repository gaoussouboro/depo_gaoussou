<?php
session_start();
if(isset($_POST['login'])){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	if($username && $password){
		$connect = mysql_connect("127.0.0.1","root","");
		mysql_select_db("projet_tutore");
		$login = mysql_query("SELECT * from administrateur WHERE username='$username'");
		while($log = mysql_fetch_assoc($login)){
			$dbusername = $log['username'];
			$dbpassword = $log['password'];
		}
		if($username==$dbusername && $password==$dbpassword){
			$_SESSION['username'] = $dbusername;
			$_SESSION['password'] = $dbpassword;
			header("location:acceuiladmin.php");
		}else{
			header("location:admin.php?notify=nom d'utilisateur ou mot de passe incorrectent");
		}
	}else{
		header("location:admin.php?notify=Veuiller renseigner tout les champs");
	}
}
?>