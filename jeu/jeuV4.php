<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jeu v3</title>
    </head>
    <body>

        <div>
            <h1>Trouvez le nombre entre 1 et 10</h1>
            <p>Vous pouvez réaliser 5 tentatives</p>
            <form name="form">
                <input type="text" name="tentative" placeholder="votre nombre">
                <input type="button" value="Tentez votre chance" onclick="reponse();">
            </form>
            <div id="resultat"></div>
            <div id=nombreTentative></div>

            <script>

                var NbJoueur = Math.floor(Math.random() * 11);
                var NbTentative = 0;

                function reponse () {
                    var NbAppli = document.form.tentative.value;
                    NbTentative++;

                    if (NbAppli < NbJoueur) {
                        document.getElementById('resultat').innerHTML="Trop petit";
                    }else if (NbAppli > NbJoueur) {
                        document.getElementById('resultat').innerHTML="Trop grand";
                    }else if (NbAppli = NbJoueur) {
                        document.getElementById('resultat').innerHTML="<strong>TOP ! Vous avez Gagné !</strong>";
                    }
                    if (NbTentative == 5) {
                        document.getElementById('resultat').innerHTML="<strong>GAME OVER !</strong>";
                        }
                
                        document.getElementById('nombreTentative').innerHTML="Vous êtes à : "+ NbTentative + " tentative(s)";
                }

            </script>
        </div>
    </body> 
</html>