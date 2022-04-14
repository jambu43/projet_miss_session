<?php 
	// connexion a la base de donnee
	try {
		$db = new PDO("mysql:host=localhost;dbname=auditoire","root","");
		
	} 
	catch (Exception $e) 
	{
		die('Erreur :' .$e->getMessage());
	}
 ?>