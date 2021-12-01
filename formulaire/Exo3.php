<!DOCTYPE html>
<html>

	<style>
		label {
		  position: relative;
		}
		label input {
		  font-size: 1em;
		  color: black;
		  background: transparent;
		  padding: 1rem 1.2rem;
		  width: 350px;
		  border-radius: 5px;
		  border: 2px solid #7a7a7a;
		  transition: all 0.2s;
		}

		label input:focus {
		  border-color: #ff4754;
		}
		label .password-icon {
		  display: flex;
		  align-items: center;
		  position: absolute;
		  top: 50%;
		  right: 20px;
		  transform: translateY(-50%);
		  width: 20px;
		  color: black;
		  transition: all 0.2s;
		}
		label .password-icon:hover {
		  cursor: pointer;
		  color: black;
		}
		label .password-icon .feather-eye-off {
		  display: none;
		}
	</style>

	<body>

		<h1 id="titre">Utilisation des Styles via des fonctions Js</h1>

		<h2>Apparition d'un texte</h2>
		<button onclick="see()">See</button>
		<p id="demo"></p>

		<h2>changement de couleur du H1</h2>
		<button onclick="font()">font</button>

		<h1>Comment afficher ou masquer un élément HTML</h1>
    	<button id="togg1">Cliquez-moi !</button>
    	<button id="togg2">Cliquez-moi !</button>
    	<div id="d1">
    	    <p>Ce texte appartient au premier div de ma page</p>
    	    <p>Ce deuxième paragraphe également</p>
    	</div>
    	<div id="d2">
    	    <p>Il existe deux façons de cacher un élément <span>comme un div</span> en CSS :</p>
    	    <ul>
    	        <li>Utiliser visibility: hidden</li>
    	        <li>Utiliser display: none</li>
    	    </ul>
    	</div>
		<div>
		<label>
  			<input type="password" placeholder="Mot de passe">

  			<div class="password-icon">
  			  <i data-feather="eye"></i>
  			  <i data-feather="eye-off"></i>
  			</div>
		</label>
		</div>
		
		<script src="https://unpkg.com/feather-icons"></script>

		<script>
			/* Afficher et Masquer via recherche sur internet : 2 méthodes */

			let togg1 = document.getElementById("togg1");
			let togg2 = document.getElementById("togg2");
			let d1 = document.getElementById("d1");
			let d2 = document.getElementById("d2");

			togg1.addEventListener("click", () => {
			  if(getComputedStyle(d1).display != "none"){
			    d1.style.display = "none";
			  } else {
			    d1.style.display = "block";
			  }
			})

			function togg(){
			  if(getComputedStyle(d2).display != "none"){
			    d2.style.display = "none";
			  } else {
			    d2.style.display = "block";
			  }
			};
			togg2.onclick = togg;

			/* Code perso */
			function see() {
			  document.getElementById("demo").innerHTML = "Bonjour et Bienvenue";
			}

			function font() {
			  document.getElementById("titre").style.color = "red";
			}

			/* champs mdp avec possibilité de visualiser via recherche web */
			feather.replace();
			const eye = document.querySelector(".feather-eye");
			const eyeoff = document.querySelector(".feather-eye-off");
			const passwordField = document.querySelector("input[type=password]");

			eye.addEventListener("click", () => {
 				eye.style.display = "none";
 				eyeoff.style.display = "block";
 				passwordField.type = "text";
			});

			eyeoff.addEventListener("click", () => {
			  	eyeoff.style.display = "none";
			  	eye.style.display = "block";
			  	passwordField.type = "password";
			});

		</script>

	</body>

</html>
