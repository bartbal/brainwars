<?php
	session_start();
	$_SESSION["playername"] = $_POST["naam"];
	header("Location: ../uitleg.php");
?>

