<script >
 	function verifNomPrenom() {
 	let nom = document.getElementById('formEx1Nom').value;
 	let prenom = document.getElementById('formEx1Prenom').value;

 	console.log(nom);
 	console.log(prenom);

 	if ((nom=="") && (prenom=="")) {
		document.getElementById('Ex1ErreurNom').innerHTML= "merci de renseigner votre Nom";
 		document.getElementById('Ex1ErreurPrenom').innerHTML= "merci de renseigner votre Prénom";
 		return false;
 	}else if ((nom=="") && (prenom!="")){
		document.getElementById('Ex1ErreurNom').innerHTML= "merci de renseigner votre Nom";
		return false;
	}else if ((nom!="") && (prenom=="")){
		document.getElementById('Ex1ErreurPrenom').innerHTML= "merci de renseigner votre Prenom";
		return false;
	}else{
		return true;
		}
 	}
 </script>

<form name="formEx1" action="" onsubmit="return verifNomPrenom()">
	<table>
		<tbody>
			<tr>
				<td>nom</td>
				<td><input type="text" name="nom" id="formEx1Nom"> <span id="Ex1ErreurNom" class="error"></span></td>
			</tr>
			<tr>
				<td>prénom</td>
				<td><input type="text" name="prenom" id="formEx1Prenom"> <span id="Ex1ErreurPrenom" class="error"></span></td>
			</tr>
		</tbody>
	</table>
	<br>
	<input type="submit">
</form>

