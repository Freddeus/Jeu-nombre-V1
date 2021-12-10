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
            <h2>Pour commencer sélectionnez le niveau de difficultés souhaité</h2>
            <p>niveau 1 : 5 tentatives / Chiffres de 0 à 10</p>
            <p>niveau 2 : 5 tentatives / Chiffres de 0 à 15</p>
            <p>niveau 3 : 5 tentatives / Chiffres de 0 à 20</p>
            <p>Et prochainement bien plus encore de niveau - Serez vous à la hauteur ?</p>
            <p>
                <form name="niveau">
	            	<select id="niveau">
	            		<option value="1">Niveau 1</option>
	            		<option value="2">Niveau 2</option>
	            		<option value="3">Niveau 3</option>
	            	</select>
	            </form>
            </p>    
            <p>
                <form name="form">
                    <input type="text" name="tentative" placeholder="votre nombre">
                    <input type="button" value="Tentez votre chance" onclick="reponse();">
                </form>
            </p>
            <p>
                <div id="resultat"></div>
                <div id="nombreTentative"></div>
                <div id=historique>Historique : </div>
            </p>
            <script>

                var niveauJeu = parseInt(document.getElementById('niveau').value);
                var tentativePossible = 5;
                var tentativeRestante = tentativePossible-NbTentative;

                if(niveauJeu==1) {
                    var NbJoueur = Math.floor(Math.random() * 11);
                    var NbTentative = 0;
                    var historique = 0;

                    function reponse () {
                        var NbAppli = document.form.tentative.value;
                        var tentativePossible = 5;
                        NbTentative++;
                        NbAppli;

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
                        
                        document.getElementById('nombreTentative').innerHTML="Vous êtes à : "+ NbTentative + " tentative(s), il vous en reste "+ (tentativePossible-NbTentative);
                        document.getElementById('historique').innerHTML+=" "+ NbAppli;
                    } 
                    
                } else if (niveauJeu==2) {
                    var NbJoueur = Math.floor(Math.random() * 16);
                    var NbTentative = 0;

                    function reponse () {
                        var NbAppli = document.form.tentative.value;
                        var tentativePossible = 5;
                        NbTentative++;
                        NbAppli;

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
                        
                        document.getElementById('nombreTentative').innerHTML="Vous êtes à : "+ NbTentative + " tentative(s), il vous en reste "+ (tentativePossible-NbTentative);
                        document.getElementById('historique').innerHTML+=" "+ NbAppli;
                    }
                } else if (niveauJeu==3) {
                    var NbJoueur = Math.floor(Math.random() * 21);
                    var NbTentative = 0;

                    function reponse () {
                        var NbAppli = document.form.tentative.value;
                        var tentativePossible = 5;
                        NbTentative++;
                        NbAppli;

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
                        
                        document.getElementById('nombreTentative').innerHTML="Vous êtes à : "+ NbTentative + " tentative(s), il vous en reste "+ (tentativePossible-NbTentative);
                        document.getElementById('historique').innerHTML+=" "+ NbAppli;
                    }
                }

            </script>
        </div>
    </body> 
</html>