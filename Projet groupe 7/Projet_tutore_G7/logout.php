<?php
session_start();
if($_SESSION['username'] || $_SESSION['password']){
	session_destroy();
	header("location:admin.php?notify=tu es deconnecté.");
}
?>
<>