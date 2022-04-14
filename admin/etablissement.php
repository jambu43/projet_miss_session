<?php 
    $title = "Etablissement";
    include('partials/db.php');
    include('partials/head.php');
    include('partials/header.php');
    include("partials/requetes.php");
 ?>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="">
						<div class="well blue">
							<div class="page-header">
								Gestion des auditoires
							</div>
							<form  method="get"  action="etablissement2.php" class="form-horizontal">
								<div class="">
									<div class="les3">
										<div class="form-group col-md-3">
											<div class="">
												<label for="">Année academique</label>
													<select class="form-control" name="annee">
														<option></option>
														<?php 
															while ($annees = $annee->fetch()) {
																?>
																<option value="<?= $annees['label_annee'];?>" name="annee">
																	<?= $annees['label_annee'];?>
																</option>
																<?php
															}
														 ?>
													</select>
											</div>
										</div>
										<div class="form-group col-md-3 pull-right">
											<div class="">
												<label for="">Semestre</label>
												<select class="form-control" name="semestre">
													<option></option>
													<?php 
														while ($semestres = $semestre->fetch()) {
															?>
															<option value="<?= $semestres['label_semestre'];?>" name="semestre">
																<?= $semestres['label_semestre'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-3 col-md-push-2" >
												<label for="">Site</label>
												<select class="form-control" name="site">
													<option></option>
													<?php 
														while ($sites = $site->fetch()) {
															?>
															<option value="<?= $sites['label_site'];?>">
																<?= $sites['label_site'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="  col-md-4 col-md-push-10">
										<button type="submit" class="btn btn-success btn-md col-lg-5">
											Suivant
										</button>
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