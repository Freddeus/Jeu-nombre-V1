<?php
    if ((!empty($_GET["id"])) && (!empty($_GET["mdp"]))) {
        if ($_GET["id"]=="fred" && $_GET["mdp"]=="fred") {
            session_start();
            $_SESSION['connect']='ok';
            $identifiant=$_GET['id'];
            setcookie("back",$identifiant);
            header('location:back.php');
        }else{
            header('location:index.php');
        }
    }else{
        header('Location:index.php');
    }
?>