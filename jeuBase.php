<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jeu v1</title>
    </head>
    <body>
    <div>
        <h1>Trouvez le nombre entre 1 et 10</h1>
        <button onclick="reponse()">Proposez votre Nombre</button>
        <div id="resultat"></div>
        <script>
            var NbAppli = Math.floor(Math.random() * 11);

            function reponse () {

                var NbJoueur = parseInt(prompt("nombre entre 0 et 10"));
                var Gagne = "Gagné";
                var Perdu = "Essai encore";

                if (NbAppli == NbJoueur) {
                    document.getElementById('resultat').innerHTML=Gagne;
                }else{
                    document.getElementById('resultat').innerHTML=Perdu;
                }
            }
            
        </script>
    </body>
</html>