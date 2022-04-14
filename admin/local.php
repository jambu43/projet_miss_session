<?php 
	$title = "Local";
	include("partials/db.php");
	include("partials/head.php");
	include("partials/header.php");
	include("partials/function.php");
	include("partials/requetes.php");
 ?>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="">
						<div class="well blue">
							<div class="page-header">
								Affectation des locaux
							</div>
							<form  method="post"  action="" class="form-horizontal">
								<div class="">
									<div class="les3">
										<div class="form-group col-md-3">
											<div class="">
												<label for="">Site</label>
												<select class="form-control" name="site">
													<option></option>
													<?php 
														while ($sites = $site->fetch()) {
															?>
															<option value="<?= $sites['id_site'];?>">
																<?= $sites['label_site'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
										</div>
										<div class="form-group col-md-3 pull-right">
											<div class="">
												<label for="">Local</label>
												<select class="form-control" name="local">
													<option></option>
													<?php 
														while ($locals = $local->fetch()) {
															?>
															<option value="<?= $locals['id_local'];?>">
																<?= $locals['label_local'];?>
															</option>
															<?php
														}
													 ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-3 col-md-push-2" >
												<label for="">Etage</label>
												<select class="form-control" name="etage">
													<option></option>
													<?php 
														while ($etages = $etage->fetch()) {
															?>
															<option value="<?= $etages['id_etage'];?>">
																<?= $etages['label_etage'];?>
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
										<input type="submit" value="Associé" class="btn btn-success btn-md col-lg-5" desable="desable" name="btn_assoc">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<div class="container">
	<div class="container">
		<h3><i>Locaux disponibles</i></h3>
	</div>
	<div class="col-md-3">
		<div class="container">
			<table class="table">
				<tr class="success">
					<th>Site</th>
					<th>Etage</th>
					<th>Local</th>
				</tr>
				<?php 
					while ($assocLocSelecs = $assocLocSelec->fetch()) {
						?>
						<tr>
							<td>
								<?php echo $assocLocSelecs['label_site'];  ?>
							</td>
							<td>
								<?php echo $assocLocSelecs['label_etage'];  ?>
							</td>
							<td>
								<?php echo $assocLocSelecs['label_local'];  ?>
							</td>
						</tr>
						<?php
					}
			 ?>

			</table>
		</div>
	</div>	
</div>		
<?php 
	while ($assocLocSelecs = $assocLocSelec->fetch()) {
		print_r($assocLocSelecs);
		echo "bon";
	}



 ?>





 <?php 
 	if (isset($_POST['site'])) {
 		assocLocInsert();
 	}
 	include("partials/footer.php");
  ?>