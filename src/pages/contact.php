<?php 
session_start();

include("../includes/header-pages.php") ?>

<body>
<!-- FORMULAIRE DE CONTACT -->	
	<div class="formulaire-complet">
		<div class="container">
	        <h1 class="display-4">CONTACT</h1>
	        <form method="POST" action="contact.php">
	            <fieldset>
	                <legend class="lead">Bienvenue sur notre formulaire de contact, séléctionnez l'option la plus approprié à votre demande et nous y répondrons dans les plus bref délais.</legend>
		            <div class="form-contact">    
		                <div class="form-group">
		                	<label class="lead" for="email">Entrez votre mail</label>
		                	<input type="email" class="form-control" id="email" placeholder="Exemple@hotmail.com" name="mail">
		                </div>
		                <div class="form-group">
		                	<label class="lead" for="selection" name="choix-contact">Quel est le but de votre demande de contact ?</label>
		                	<select id="selection" class="form-control">
		                   		<option value="">Liste de choix...</option>
		                   		<option value="question" name="question">Poser une ou plusieurs questions</option>
		                   		<option value="partage">Partager un voyage sur le blog</option>
		                   		<option value="partenariat">Demande de partenariat/sponsoring</option>
		                   		<option value="aide">Nous soumettre une idée ou relevé une erreur</option>
		                   	</select>
		                </div>
		                <div class="form-group">
		                	<label class="lead" for="bio">Message</label>
		                	<textarea class="form-control" id="bio" rows="3" name="message"></textarea>
		                </div>
		                <div class="form-group">
		                	<label class="lead" for="fichier">Joignez quelques photos pour les ajoutez au récit de votre aventure (avec l'extension .jpg ou .jpeg)</label>
		                    <input type="file" class="form-control-file" id="fichier" accept=".jpg, .jpeg" multiple>
		                </div>
		                <div class="form-group">
		                	<button class="btn btn-primary" type="submit" name="sendcontact">Envoyer</button>
		                </div>
		            </div>    
				</fieldset>
	        </form>
		</div>
	</div>
<!-- FORMULAIRE DE CONTACT -->


</body>

<?php include("../includes/footer-pages.php") ?>