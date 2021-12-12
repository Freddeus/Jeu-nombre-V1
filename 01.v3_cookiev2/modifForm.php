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
	<main>
		<div>
			<h2>Modifier votre article</h2>
			
    		<?php
    			$id=$_GET['id'];
				
                require_once("connect.php");
            
    			$requete="SELECT id,titre,description,article FROM link WHERE id=$id"; 
    			$reponse=$bdd->query($requete); 
    			foreach ($reponse as $info) {
    			    $id= $info['id'];
    			    $titre= $info['titre'];
    			    $description= $info['description'];
					$article= $info['article'];
    			    }
    		?>
			<form action="modifTraitt.php" method="GET">
    			<input type="text" name="titre" value="<?php echo $titre; ?>">
    			<input type="text" name="description" value="<?php echo $description; ?>">
				<input type="text" name="article" value="<?php echo $article; ?>">
    			<input type="submit" value="Valider">
    			<input type="hidden" name="id" value="<?php echo $id; ?>">
			</form>
		</div>
	</main>
</body>
</html>