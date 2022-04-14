<!-- LES FICHIER CONTENANT LES FONCTIONS -->
<?php 
// LA FUNCTION POUR L'AUTHENTIFICATION DANS L'APP, LE NON DE LA FONCTION EST userConnect
	function userConnect(){
		$dbuser = $GLOBALS['db']->prepare('SELECT * FROM login WHERE pseudo = :pseudo');
		$dbuser->execute(array('pseudo'=>$_POST['pseudo']));
		$dbusers = $dbuser->fetch();
		if (!empty($dbusers)) {
			if($dbusers['password'] == $_POST['password'])
			{
				session_start();	
				$_SESSION = $dbusers ;
				if (!empty($_SESSION)) {
					header("location:home.php");
				}
			}
			else{
				$valid = "Mot de passe incorrect";
			}
		}
		else{
			$valid = "Pseudo incorrect";
		}
	}
	function userdeconn()
	{
		$_SESSION = [];
		 session_destroy();
		 header("location:../index.php");
	}
// LA FONCTION DE L'INSERTION DE SITE DANS LA BASSE DE DONNEE
	function SiteInsert(){
		if(isset($_POST['btn_site'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO site(label_site) VALUES (:label_site)');
			$insertsit->execute(array('label_site'=>$_POST['label_site']))
			or die(print_r($q->errorInfo()));
		}
	}
	// LA FONCTION DE L'INSERTION DE LOCAL DANS LA BASSE DE DONNEE
	function LocalInsert(){
		if(isset($_POST['btn_local'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO local(label_local) VALUES (:label_local)');
			$insertsit->execute(array('label_local'=>$_POST['label_local']))
			or die(print_r($q->errorInfo()));
		}
	}
	// LA FONCTION DE L'INSERTION D'ETAGE DANS LA BASSE DE DONNEE
	function EtageInsert(){
		if(isset($_POST['btn_etage'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO etage(label_etage) VALUES (:label_etage)');
			$insertsit->execute(array('label_etage'=>$_POST['label_etage']))
			or die(print_r($q->errorInfo()));
		}
	}
	// LA FONCTION DE L'INSERTION DE PROMOTION DANS LA BASSE DE DONNEE
	function PromoInsert(){
		if(isset($_POST['btn_promo'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO promotion(label_promotion) VALUES (:label_promotion)');
			$insertsit->execute(array('label_promotion'=>$_POST['label_promotion']))
			or die(print_r($q->errorInfo()));
		}
	}
	
	function HeureInsert(){
		if(isset($_POST['btn_heure'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO heure(label_heure) VALUES (:label_heure)');
			$insertsit->execute(array('label_heure'=>$_POST['label_heure']))
			or die(print_r($q->errorInfo()));
		}
	}
	function JourInsert(){
		if(isset($_POST['btn_jour'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO jour(label_jour) VALUES (:label_jour)');
			$insertsit->execute(array('label_jour'=>$_POST['label_jour']))
			or die(print_r($q->errorInfo()));
		}
	}
	function SemestreInsert(){
		if(isset($_POST['btn_semestre'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO semestre(label_semestre) VALUES (:label_semestre)');
			$insertsit->execute(array('label_semestre'=>$_POST['label_semestre']))
			or die(print_r($q->errorInfo()));
		}
	}
	function AnneeInsert(){
		if(isset($_POST['btn_annee'])){
			$insertsit = $GLOBALS['db']->prepare('INSERT INTO annee(label_annee) VALUES (:label_annee)');
			$insertsit->execute(array('label_annee'=>$_POST['label_annee']))
			or die(print_r($q->errorInfo()));
		}
	}
	function assocLocInsert(){
		if(isset($_POST['btn_assoc'])){
			$insertassocLoc = $GLOBALS['db']->prepare('INSERT INTO designation_local(id_site, id_etage, id_local) VALUES (:id_site, :id_etage, :id_local)');
			$insertassocLoc->execute(array('id_site'=>$_POST['site'],
									  	   'id_etage'=>$_POST['etage'],
									       'id_local'=>$_POST['local']))
			or die(print_r($insertassocLoc->errorInfo()));
		}
	}
	function SelectAnnee(){
		$dbuser = $GLOBALS['db']->query('SELECT * FROM annee');
	}

	function SelectDesc(){
		
		$assocLocSelec = $GLOBALS['db']->prepare('SELECT * FROM  `designation_local` INNER JOIN site ON site.id_site =  designation_local.id_site INNER JOIN etage ON etage.id_etage = designation_local.id_etage INNER JOIN local ON local.id_local = designation_local.id_local');
	}
	function InserHoraire(){
		if (isset($_POST['btn_horaire'])) {
			$insertassocLoc = $GLOBALS['db']->prepare('INSERT INTO horaire(id_designation_local, id_jour, id_promotion, id_heure, id_semestre, id_annee) VALUES (:id_designation_local, :id_jour, :id_promotion, :id_heure, :id_semestre, :id_annee)');
			$insertassocLoc->execute(array('id_designation_local'=>$_POST['designation_local'],
									  	   'id_jour'=>$_POST['jour'],
									       'id_promotion'=>$_POST['promotion'],
									       'id_heure'=>$_POST['heure'],
									       'id_semestre'=>$_POST['semestre'],
									       'id_annee'=>$_POST['annee']))
			or die(print_r($insertassocLoc->errorInfo()));
			header("location:etablissement.php");
			
		}
	}
	function SelecHoraire(){
		if (isset($_POST['btn_voir'])) {	
		$selec = $GLOBALS['db']->prepare('SELECT * FROM horaire 
											INNER JOIN annee ON horaire.id_annee = annee.id_annee 
											INNER JOIN heure ON horaire.id_heure = heure.id_heure
											INNER JOIN jour ON horaire.id_jour = jour.id_jour
											INNER JOIN semestre ON horaire.id_semestre = semestre.id_semestre 
											INNER JOIN promotion ON horaire.id_promotion = promotion.id_promotion
											INNER JOIN designation_local ON horaire.id_designation_local = designation_local.id_designation_local
											INNER JOIN local ON designation_local.id_local = local.id_local
											INNER JOIN etage ON designation_local.id_etage = etage.id_etage
											INNER JOIN site ON designation_local.id_site = site.id_site
											WHERE site.id_site =:id_site AND annee.id_annee =:id_annee AND semestre.id_semestre =:id_semestre');
		$selec->execute(array('id_site'=>$_POST['site'],
							  'id_annee'=>$_POST['annee'],
							  'id_semestre'=>$_POST['semestre']))
		or die(print_r($selec->errorInfo()));
		return $selec->fetchAll();
		}
	}
