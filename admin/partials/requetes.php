<?php 
	$annee = $GLOBALS['db']->query('SELECT * FROM annee'); 
    $site = $GLOBALS['db']->query('SELECT * FROM site'); 
    $semestre = $GLOBALS['db']->query('SELECT * FROM semestre'); 	
    $local = $GLOBALS['db']->query('SELECT * FROM local');
    $etage = $GLOBALS['db']->query('SELECT * FROM etage');
    $jour = $GLOBALS['db']->query('SELECT * FROM jour');
    $heure = $GLOBALS['db']->query('SELECT * FROM heure');
    $promotion = $GLOBALS['db']->query('SELECT * FROM promotion');
    $assocLocSelec = $GLOBALS['db']->query('SELECT * FROM  designation_local 
    	INNER JOIN site ON site.id_site =  designation_local.id_site 
    	INNER JOIN etage ON etage.id_etage = designation_local.id_etage 
    	INNER JOIN local ON local.id_local = designation_local.id_local');
    $occupation = $GLOBALS['db']->query('SELECT * FROM horaire INNER JOIN designation_local ON designation_local.id_designation_local = horaire.id_designation_local
        INNER JOIN local ON local.id_local = designation_local.id_local
        INNER JOIN etage ON etage.id_etage = designation_local.id_etage
    	INNER JOIN jour ON jour.id_jour = horaire.id_jour
    	INNER JOIN promotion ON promotion.id_promotion = horaire.id_promotion
    	INNER JOIN heure ON heure.id_heure = horaire.id_heure
    	INNER JOIN semestre ON semestre.id_semestre = horaire.id_semestre
    	INNER JOIN annee ON annee.id_annee = horaire.id_annee
    	INNER JOIN site ON site.id_site = horaire.id_site');



    if (isset($_POST['btn_voir'])) {
        $selec = $GLOBALS['db']->prepare('SELECT * FROM horaire INNER JOIN annee ON horaire.id_annee = annee.id_annee 
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
        }
 ?>