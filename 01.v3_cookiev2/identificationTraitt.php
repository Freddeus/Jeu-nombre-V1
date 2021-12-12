<?php
    require_once("connect.php");
    $verif="SELECT * FROM user";
    $reponse=$bdd->query($verif);

    foreach ($reponse as $_value) {
        $id=$_value[0];
        $login=$_value[1];
        $mdp=$_value[2];
    

    if ((!empty($_GET["id"])) && (!empty($_GET["mdp"]))) {
        if ($login==$_GET['id'] && $mdp==$_GET['mdp']) {
            $identifiant=$_GET['id'];
            setcookie("back",$identifiant);
            header('location:back.php');
        }else{
            header('location:index.php');
        }
    }else{
        header('Location:index.php');
    }
}
?>