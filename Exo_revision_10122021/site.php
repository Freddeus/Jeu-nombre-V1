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
        <h1>Nos Articles</h1>    
        <div>
            <h2>Se connecter</h2> 
            <p>(réservé à l'admninistrateur)</p>
            <form action="identificationTraitt.php">
                <input type="text" name="id" id="id">
                <input type="text" name="mdp"id="mdp">
                <input type="submit" value="Connexion">
            </form>
        </div>
    </Header>
    <main>
        <div>
            <h2>Découvrez des extraits de nos articles</h2>
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
                        $article=$_value["article"];
                        echo "
                            <div>
                                <p><strong>".$titre."</strong></p>
                                <p>".$article."</p>
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
