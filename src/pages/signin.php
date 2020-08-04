<?php 
session_start();

include("../includes/header-pages.php") ?>

<body>
	<!-- FORMULAIRE D'INSCRIPTION -->
	<div class="container">
		<div class="form-connexion-complet">  	
		  	<form method="POST" action="signin.php">
		  		<h1 class="display-4">INSCRIPTION</h1>
		  		<legend class="lead">Bienvenue sur la page d'inscription</legend>	
			  	<div class="form-connexion">	
			  		<div class="form-group">
              			<label for="exampleInputText">Pseudo</label>
              			<input type="text" class="form-control" id="exampleInputText" name="pseudo">
            		</div>
           			<div class="form-group">
			    		<label for="exampleInputEmail1">Adresse E-mail</label>
			    		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exemple@gmail.com" name="mail">
			    		<small id="emailHelp" class="form-text text-muted">Votre adresse mail restera confidentiel.</small>
			  		</div>
			  		<div class="form-group">
			    		<label for="exampleInputPassword1">Mot De Passe</label>
			    		<input type="password" class="form-control" id="exampleInputPassword1" name="mdp1">
			  		</div>
			  		<div class="form-group">
              			<label for="exampleInputPassword2">Confirmation Mot De Passe</label>
              			<input type="password" class="form-control" id="exampleInputPassword2" name="mdp2">
           	 		</div>
			  		<button type="submit" class="btn btn-primary" name="sendinscription">S'Inscrire</button>
			  	</div>	
			</form>
		</div>	
	</div>	
<!-- FORMULAIRE D'INSCRIPTION' -->

<?php 
	
	include '../includes/database.php';
	global $bdd;


	//Se déclanche lors de l'activation du boutton "inscription"
	if (isset($_POST['sendinscription'])) {
	 	$pseudo = $_POST['pseudo'];
	 	$mail = $_POST['mail'];
	 	$mdp1 = $_POST['mdp1'];
	 	$mdp2 = $_POST['mdp2'];
	 	
	 	//Vérification si tous les champs sont remplis et requètes pour lire les lignes "pseudo" et "mail" de la BDD
	 	if (!empty($pseudo) && !empty($mail) && !empty($mdp1) && !empty($mdp2)) {
	 		$req = $bdd->prepare('SELECT pseudo, mail FROM membres WHERE pseudo = :pseudo');
			$req->execute(array(':pseudo'=>$pseudo));
			$donnees = $req->fetch();
			$req2 = $bdd->prepare('SELECT mail FROM membres WHERE mail = :mail');
			$req2->execute(array(':mail'=>$mail));
			$donnees2 = $req2->fetch();
	 		
	 		//Si le pseudo et le mail n'existent pas deja dans la bdd
	 		if (!$donnees && !$donnees2) {
	 			
	 			//Si les deux mots de passe sont identiques, alors on ajoute le nouveau membres à la bdd
	 			if ($mdp1 === $mdp2) {
	 				$q = $bdd->prepare("INSERT INTO membres(pseudo, mail, mdp) VALUES(:pseudo, :mail, :mdp)");
	 				$q->execute(['pseudo' => $pseudo, 'mail' => $mail, 'mdp' => $mdp1]);
	 				
	 			}else echo "mdp incorrect";
	 		
	 		echo "inscription validée";
	 		
	 		}else echo "le pseudo ou le mail existe deja";
	 		
	 	}else echo "un des champs n'est pas rempli";
	}  ?>
</body>

<?php include("../includes/footer-pages.php") ?>