<script >
 	function veriForm() {
		let nom = document.forms["form"]["Nom"];
		let prenom = document.forms["form"]["Prenom"];
		let cgu = document.forms["form"]["cgu"];
		let mdp = document.forms["form"]["mdp"];
		let mdpconfirm = document.forms["form"]["MdpConfirm"];
		let ville = document.forms["form"]["ville"];

		if (nom.value == "") { 
			document.getElementById('ErreurNom').innerHTML= "merci de renseigner votre Nom";
	        nom.focus();
			return false; 
    	} 
		if (prenom.value == "") { 
			document.getElementById('ErreurPrenom').innerHTML= "merci de renseigner votre Prenom";
	        prenom.focus();
			return false; 
    	}   
		if ((mdp.value == "") || (mdp.value.length < 7)) { 
			document.getElementById('ErreurMdp').innerHTML= "MDP de 7 caractères minimum";
	        mdp.focus();
			return false; 
    	}   
		if (mdp.value !== mdpconfirm.value) { 
			document.getElementById('ErreurMdpConfirm').innerHTML= "les deux mots de passe sont différents";
	        mdpconfirm.focus();
			return false; 
    	} 
		if (ville.value == "...") { 
			document.getElementById('ErreurVille').innerHTML= "Sélectionnez la Ville";
	        ville.focus();
			return false; 
    	} 

		if ((document.getElementById("homme").checked) == false || (document.getElementById("femme").checked) == false) {
			document.getElementById('ErreurSexe').innerHTML= "Madame ou Monsieur";
			return false;
		}
		if (document.getElementById("cgu").checked == true) {
			document.getElementById('ErreurCgu').innerHTML= "Cgu validée";
			cgu.focus();
			return false;
		}else{
			document.getElementById('ErreurCgu').innerHTML= "merci de valider les CGU";
			cgu.focus();
			return false;
		}
	 }

 </script>

<form name="form" action="" onsubmit="return veriForm()">
	<table>
		<tbody>
			<tr>
				<td>nom</td>
				<td><input type="text" name="nom" id="Nom"><span id="ErreurNom" class="error"></span></td>
			</tr>
			<tr>
				<td>prénom</td>
				<td><input type="text" name="prenom" id="Prenom"><span id="ErreurPrenom" class="error"></span></td>
			</tr>
			<tr>
				<td>CGU</td>
				<td><input type="checkbox" name="cgu" id="cgu"><span id="ErreurCgu" class="error"></td>
			</tr>
			<tr>
				<td>MDP</td>
				<td><input type="password" name="mdp" id="mdp"><span id="ErreurMdp" class="error"></td>
			</tr>
			<tr>
				<td>Confirmer MDP</td>
				<td><input type="password" name="MdpConfirm" id="MdpConfirm"><span id="ErreurMdpConfirm" class="error"></td>
			</tr>
			<tr>
	 			<td>Sexe</td>
	 			<td>
				homme<input type="radio" name="sexe" value="homme" id="homme">
				femme<input type="radio" name="sexe" value="femme" id="femme">
				<span id="ErreurSexe" class="error">
				</td>
			</tr>
	 		<tr>
	 			<td>Ville</td>
				<td>
					<select name="ville" id="ville">
                		<option value="...">...</option>  
						<option value="Bordeaux">Bordeaux</option>
                	  	<option value="Paris">Paris</option>
					  	<option value="Poitiers">Poitiers</option>
					  	<option value="Lille">Lille</option>
					  	<option value="Lyon">Lyon</option>
                	  	<option value="Nantes">Nantes</option>
					  	<option value="Saint Georges les Bx">Saint Georges les Bx</option>
                	  	<option value="Strasbourg">Strasbourg</option>
                	</select>
					<span id="ErreurVille" class="error">
				</td>

			 </tr>
		</tbody>
	</table>
	<br>
	<input type="submit">
</form>

