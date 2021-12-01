<script >
 function verifNomPrenomPasVides() {
 var r= document.getElementById('formEx1Nom').value;
 console.log(r);
 if (r=="") {
 	document.getElementById('Ex1ErreurNom').innerHTML= "erreur";
 	 return false;
 }else{
 	 return true;
 }
 }
 </script>

<form name="formEx1" action="" onsubmit="return verifNomPrenomPasVides()">
	<table>
		<tbody><tr>
			<td>nom</td>
			<td><input type="text" name="nom" id="formEx1Nom"> <span id="Ex1ErreurNom" class="error"></span></td>
		</tr>
		<tr>
			<td>prénom</td>
			<td><input type="text" name="prenom" id="formEx1Prenom"> <span id="Ex1ErreurPrenom" class="error"></span></td>
		</tr>
	</tbody></table>
	<br><input type="submit">
</form>

