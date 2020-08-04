<?php 
	//Connexion à la bdd
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=id12901717_sitevoyage;charset=utf8', 'id12901717_egevasion', 'arxhz3');
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
?>