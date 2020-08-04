<?php 
session_start();

include("src/includes/header.php") ?>
<body>
	
	<!-- PRESENTATION -->
	<div class="card bg-dark text-white">
	  	<img src="src/img/imgjumbotron.jpg" class="card-img" alt="...">
	  	<div class="card-img-overlay">
			<div class="jumbotron">
	  			<h1 class="display-4">HEY !</h1>
	  			<p class="lead">Bienvenue sur notre blog, nous sommes un couple qui aimons voyager.</br>
	  			Vous pouvez d'ailleurs vous aussi faire profiter les autres de vos expériences touristiques à travers ce blog en nous envoyant votre récit ainsi que quelques photos, nous nous ferons un plaisir d'en faire un article !</p>
	  			<hr class="my-4">
	  			<p>​"Voyager vous laisse d’abord sans voix, avant de vous transformer en conteur"</br>
	  			<span><small>Citation d'Ibn Battuta, explorateur et voyageur marocain</small></span></p>
			</div>	
	  	</div>
	</div>
	<!-- PRESENTATION -->

	<!-- NOS BONS TUYAUX -->
	<div class="tuyaux">
		<div class="titre-tuyaux">
			<h2 class="display-3">Nos Bons Tuyaux</h2>
			<p class="lead">On te propose tous nos trucs et astuces pour mieux voyager</p>
		</div>
			<div class="row">
				<div class="col-sm-3">
					<a href="src/pages/lien-tuyaux-1.php" class="lead">	
						<div class="card" style="width: 18rem;">
	  						<i class="far fa-compass fa-3x" class="card-img-top"></i>
	  						<div class="card-body">
	    						<p class="card-text">Comment voyager à moindre coût, toutes nos astuces sont dans cette rubrique.</p>
	  						</div>
						</div>
					</a>	
				</div>
				<div class="col-sm-3">
					<a href="src/pages/lien-tuyaux-2.php" class="lead">		
						<div class="card" style="width: 18rem;">
		  					<i class="fas fa-euro-sign fa-3x" class="card-img-top"></i>
		  					<div class="card-body">
		    					<p class="card-text">Vivre de son blog, si si ! C'est possible, tu veux savoir comment ? On te dit tout !</p>
		  					</div>
						</div>
					</a>		
				</div>
				<div class="col-sm-3">
					<a href="src/pages/lien-tuyaux-3.php" class="lead">	
						<div class="card" style="width: 18rem;">
	  						<i class="far fa-comments fa-3x" class="card-img-top"></i>
	  						<div class="card-body">
	    						<p class="card-text">Tu as des anectdotes ou des questions ? Viens les poster sur le forum.</p>
	  						</div>
						</div>
					</a>	
				</div>
			</div>
	</div>

	<!-- NOS BONS TUYAUX -->

	<!-- ARTICLES NOS VOYAGES-->
	<div class="articles">	
		<div class="titre-articles">
			<h2 class="display-4">Notre Carnet De Voyage</h2>
			<p class="lead">Nos dernières destinations</p>
		</div>	
			<div class="card-group">
			  	<div class="card">
			    	<img src="src/img/lyon-img.jpg" class="card-img-top" alt="photo de la ville de Lyon">
			    	<div class="card-body">
			      		<h5 class="card-title">Lyon</h5>
			      		<p class="card-text">5 jours à la découverte de Lyon viens découvrir avec nous cette ville !</p>
			      		<a href="src/pages/voyage-lyon.php" class="btn btn-primary">Se rendre sur l'article</a>
			   		</div>
			 	</div>
			  	<div class="card">
			    	<img src="src/img/corse-img.jpg" class="card-img-top" alt="photo de la Corse">
			   		<div class="card-body">
			  			<h5 class="card-title">La Corse</h5>
			   			<p class="card-text">L'ile de Beauté porte très bien son nom, viens voir pourquoi !</p>
			   			<a href="src/pages/voyage-corse.php" class="btn btn-primary">Se rendre sur l'article</a>
			   		</div>
				</div>
			  	<div class="card">
			    	<img src="src/img/marseille-img.jpg" class="card-img-top" alt="photo indice de notre prochain voyage">
			    	<div class="card-body">
			      		<h5 class="card-title">Marseille</h5>
			      		<p class="card-text">Une région formidable, pas besoin de quitter la France pour en prendre plein les yeux</p>
			      		<a href="src/pages/voyage-marseille.php" class="btn btn-primary">Se rendre sur l'article</a>
			    	</div>
			  	</div>
			</div>
	</div>	
	<!-- ARTICLES NOS VOYAGES-->

	<!-- ARTICLES VOS VOYAGES-->
	<div class="articles">	
		<div class="titre-articles">
			<h2 class="display-4">Vos Carnets De Voyage</h2>
			<p class="lead">Vos dernières destinations</p>
		</div>	
			<div class="card-group">
			  	<div class="card">
			    	<img src="src/img/dubai-img.jpg" class="card-img-top" alt="photo de la ville de Dubaï">
			    	<div class="card-body">
			      		<h5 class="card-title">Dubaï</h5>
			      		<p class="card-text">Bob est allé à la découverte de Dubaï, ça donne envie !</p>
			      		<a href="src/pages/partage-bob-dubai.php" class="btn btn-primary">Se rendre sur l'article</a>
			   		</div>
			 	</div>
			  	<div class="card">
			    	<img src="src/img/australie-img.jpg" class="card-img-top" alt="photo d'un kangourou dans un verger'">
			   		<div class="card-body">
			  			<h5 class="card-title">L'Australie</h5>
			   			<p class="card-text">Venez découvrir l'article de Jean sur l'Australie !</p></br>
			   			<a href="src/pages/partage-jean-australie.php" class="btn btn-primary">Se rendre sur l'article</a>
			   		</div>
				</div>
			  	<div class="card">
			    	<img src="src/img/turquie-img.jpg" class="card-img-top" alt="photo prise en Turquie">
			    	<div class="card-body">
			      		<h5 class="card-title">Turquie</h5>
			      		<p class="card-text">Marc nous partage ses bons tuyaux pour une visite de la Turquie</p>
			      		<a href="src/pages/partage-marc-turquie.php" class="btn btn-primary">Se rendre sur l'article</a>
			    	</div>
			  	</div>
			</div>
	</div>	
	<!-- ARTICLES VOS VOYAGES-->

</body>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

<!-- FOOTER -->

<?php include 'src/includes/footer.php' ?>
