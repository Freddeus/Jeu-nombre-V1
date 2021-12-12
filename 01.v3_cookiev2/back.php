<?php
    $cookie=$_COOKIE['back'];
    if (isset($cookie)){
    echo "</br><div style='color: blue; font-size: 2em' ><strong>Bonjour, ".$_COOKIE['back']."</strong></div>";
    }else{
        header('location:access_denied.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Header>
        <h1>Administration du Site</h1>    
        <div>
            <button><li><a href="deconnect.php" title="deconnexion">Se déconnecter</li></a></button>
        </div>
    </Header>
    <main>
        <div>
            <h2>Découvrez des extraits de nos articles</h2>
        </div>
        <div class="ajout-article">
            <h3>Ajouter un article</h3>
            <form action="ajout.php" method="GET">
                <input type="text" name="titre" placeholder="titre">
                <input type="text" name="description" placeholder="description">
                <input type="text" name="article" placeholder="article">
                <input type="submit" value="Ajouter" id="submit-ajout">
            </form>
        </div>
        <div>
        <?php
        require_once("connect.php");
        ?>
            <div>
                <?php
                    $requete="SELECT * FROM link";
                    $reponse=$bdd->query($requete);
                    foreach ($reponse as $_value) {
                        $titre=$_value["titre"];
                        $description=$_value["description"];
                        $article=$_value["article"];
                        $id=$_value["id"];
                        echo "
                            <div>
                                <p><strong><li><a href='site.php'>".$titre."</a></li></strong></p>
                                <p>".$description."</p>
                                <p>".$article."</p>
                                <button><a href='modifForm.php?id=".$id."'>Modifier</a></button>
                                <button><a href='supprimer.php?id=".$id."'>Supprimer</a></button>
                                <p>----------------</p>
                            </div>";
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
