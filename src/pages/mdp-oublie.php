<?php 
session_start();

include("../includes/header-pages.php") ?>

<body>
<!-- FORMULAIRE RECUPERATION D'UN NOUVEAU MOT DE PASSE -->
  	<div class="container">
    	<div class="form-connexion-complet">    
        	<form>
          		<h1 class="display-4">MOT DE PASSE OUBLIE ?</h1>
          		<legend class="lead">Bienvenue sur la page de récupération de votre mot de passe</legend>  
          		<div class="form-connexion">  
            		<div class="form-group">
              			<label for="exampleInputEmail1">Adresse E-mail</label>
              			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exemple@gmail.com">
              			<small id="emailHelp" class="form-text text-muted">Votre adresse mail restera confidentiel.</small>
            		</div>
            	<div class="form-group">
              		<small>Votre nouveau mot de passe vous sera envoyé sur votre boite mail</small>
            	</div>
            	<button type="submit" class="btn btn-primary">Valider</button>
          	</div>  
      		</form>
    	</div>  
  	</div>

<?php include("../includes/footer-pages.php") ?>