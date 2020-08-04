<?php 
session_start();

include("../includes/header-pages.php") ?>

<body>
<!-- FORMULAIRE DE CONNEXION -->
	<div class="container">
		<div class="form-connexion-complet">  	
		  	<form method="POST" action="login.php">
		  		<h1 class="display-4">CONNEXION</h1>
		  		<legend class="lead">Bienvenue sur la page de connexion</legend>	
			  	<div class="form-connexion">	
			  		<div class="form-group">
			    		<label for="exampleInputEmail1">Adresse E-mail</label>
			    		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exemple@gmail.com" name="mail">
			    		<small id="emailHelp" class="form-text text-muted">Votre adresse mail restera confidentiel.</small>
			  		</div>
			  		<div class="form-group">
			    		<label for="exampleInputPassword1">Mot De Passe</label>
			    		<input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
			  		</div>
			  		<div class="form-group">
			  			<a href="mdp-oublie.php" class="lien-form">Mot De Passe oublié ?</a>
			  		</div>
			  		<div class="form-group">
			  			<a href="signin.php" class="lien-form">Vous n'êtes pas encore inscrit ? Cliquez-ici.</a>
			  		</div>
			  		<button type="submit" class="btn btn-primary" name="sendconnexion">Se Connecter</button>
			  	</div>	
			</form>
		</div>	
	</div>	
<!-- FORMULAIRE DE CONNEXION -->

<?php 
	include '../includes/database.php';
	global $bdd; 

	//Si une action est faite sur le boutton connexion
	if(isset($_POST['sendconnexion'])){
		$mail = $_POST['mail'];
		$mdp = $_POST['mdp'];

		//Si tous les champs sont remplis, on fait une requète pour récupérer dans la bdd les mails et les mdps associés
		if (!empty($mail) && $mail !='' && !empty($mdp)) {
			$req = $bdd->prepare('SELECT * FROM membres WHERE mail = :mail AND mdp = :mdp');
			$req->execute(array(':mail'=>$mail, ':mdp'=>$mdp));
			$donnees = $req->fetch();

			//Si la combinaison mail/mdp remplie existe dans la bdd, on crée une session
			if ($donnees) {
				$_SESSION['mail'] = $mail;			//!!!A FAIRE : RECUPERER LE PSEUDO!!!//
			}else {
				echo "Combinaison Email/Mot de passe inconnue";
			}
		}else echo "champs non remplis";
	}



?>
</body>

<?php include("../includes/footer-pages.php") ?>