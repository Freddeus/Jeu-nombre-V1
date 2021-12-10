<?php
	require_once("connect.php");
	$id=$_GET['id'];
	$titre=$_GET['titre'];
	$description=$_GET['description'];
	$article=$_GET['article'];
	$bdd->exec("UPDATE link SET titre = '$titre',description='$description',article='$article' WHERE id = $id");
	header('Location:back.php');
	die();
?>