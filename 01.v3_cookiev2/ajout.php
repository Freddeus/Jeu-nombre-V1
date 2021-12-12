<?php
	require_once("connect.php");
	$titre=$_GET['titre'];
	$description=$_GET['description'];
	$article=$_GET['article'];
	$query="INSERT INTO link (titre, description, article) VALUES('$titre','$description','$article')";
	$execution=$bdd->query($query);
	header('Location:back.php');
	die();
?>