<?php 
    $title = "Aperçu";
    include('partials/db.php');
    include('partials/head.php');
    include('partials/header.php');
    include('partials/requetes.php');
    include('partials/function.php');

		if (isset($_POST['site'])) {
			$selec = SelecHoraire();
			
		}

 ?>
	
	<?php 
		while ($sites = $site->fetch()) {
			?>
			<option value="<?= $sites['id_site'];?>">
				<?= $sites['label_site'];?>
			</option>
			<?php
		}
	 ?>
									
											
							
					
					
					<?php if(isset($_POST['site'])): ?>
					<?php foreach ($selec as $key => $voir):?>
							
									
										<?= $voir['label_etage'];?> <br>
										<?= $voir['label_local'];?> <br>
										
								
										<?php 
											if ($voir['label_jour'] == "samedi") {
												if ($voir['label_heure']== "8h-12h") {
													echo $voir['label_promotion'];	
												}
											}
																								
										 ?>
									
																
					<?php endforeach; ?>
				<?php endif ?>
				