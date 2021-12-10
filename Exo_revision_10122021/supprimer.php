<?php
	require_once("connect.php");
    $id=$_GET['id'];
    $bdd->exec("DELETE from link WHERE id = $id");
	header('Location:back.php');
	die();
?>