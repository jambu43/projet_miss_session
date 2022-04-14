<?php 
    $title = "Emplacement";
    include('partials/head.php');
    include('partials/db.php');
    include('partials/header.php');
    include("partials/function.php");
    include('partials/requetes.php'); 
    if (isset($_POST['jour'])) {
		InserHoraire();
	}
 ?>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="">
						<div class="well blue">
							<div class="panel-heading">
								<span>
									<?= $_GET['annee']; ?>
								</span>
								<br>
								<span>
									<?= $_GET['semestre']; ?>
								</span>
								<br>
								<span>
									<?= $_GET['site']; ?>
								</span>
							</div>
							<div class="page-header">
								Occupation des auditoires
							</div>
							<form  method="post"  action="etablissement2.php" class="form-horizontal">
								<?php 
									if (isset($_GET['semestre'])) {
										while ($semestres = $semestre->fetch()){					
										if ($semestres['label_semestre'] == $_GET['semestre']) {
											?>
											<input type="hidden" value="<?php echo $semestres['id_semestre'];?>" name="semestre">
											<?php
										}					
									}
										while ($annees = $annee->fetch()) {
										if ($annees['label_annee'] == $_GET['annee']) {
												?>
												<input type="hidden" value="<?php echo $annees['id_annee'];?>" name="annee">
												<?php
											}
									    }
									    while ($sites = $site->fetch()) {
										if ($sites['label_site'] == $_GET['site']) {
											?>
											<input type="hidden" value="<?php echo $sites['id_site'];?>" name="site">
											<?php
											}
										}
									}


								 ?>
								
								<div class="">
									<div class="">
										<div class="form-group col-md-3">
											<div class="">
												<label for="">Jour</label>
												<select class="form-control" name="jour">
													<option></option>
													<?php 
														while ($jours = $jour->fetch()) {
															?>
															<option value="<?= $jours['id_jour'];?>">
																<?= $jours['label_jour'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-3 " >
												<label for="">Heure</label>
												<select class="form-control" name="heure">
													<option></option>
													<?php 
														while ($heures = $heure->fetch()) {
															?>
															<option value="<?= $heures['id_heure'];?>">
																<?= $heures['label_heure'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
											<div class="col-md-3" >
												<label for="">Emplacement</label>
												<select class="form-control" name="designation_local">
													<option></option>
													<?php 
														while ($assocLocSelecs = $assocLocSelec->fetch()) {
															 if ($assocLocSelecs['label_site'] == $_GET['site']) {
															?>
															<option value="<?= $assocLocSelecs['id_designation_local']?>">
																<?php
																	echo $assocLocSelecs['label_etage'].", ". $assocLocSelecs['label_local'];
																 ?>
															</option>
															<?php
															}
														}
												 ?>
												</select>
											</div>
											<div class="col-md-3" >
												<label for="">Promotion</label>
												<select class="form-control" name="promotion">
													<option></option>
													<?php 
														while ($promotions = $promotion->fetch()) {
															?>
															<option value="<?= $promotions['id_promotion'];?>">
																<?= $promotions['label_promotion'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="">
									<div class="form-group">
										<div class="pull-right" id="btn-nabiso">
											<a href="etablissement.php" class="btn btn-primary">precedent</a>										
											<button type="submit" class="btn btn-success" name="btn_horaire">
												OK
											</button>
										</div>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 
<?php 	
    include('partials/footer.php');
?>