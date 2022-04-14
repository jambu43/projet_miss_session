<?php 
	$title = "Ajouter";
	include("partials/db.php");
	include("partials/head.php");
	include("partials/header.php");
	include("partials/function.php");
 ?>
<div class="container">
	<div class="well blue" style="height:100%;">
		<h4 class="text-center h1">Ajouter les informations ci-apres</h4>
		<hr>
		<div class="col-md-4">
			<div class="panel panel-biso">
				<div class="panel-heading">
					Ajouter un site
				</div>
				<div class="panel-body">
					<form class="form-inline" method="post">
						<div class="form-group">
							<input class="form-control" name="label_site" />
							<button class="btn btn-biso" type="submit" name="btn_site">ok</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter un local
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_local">
						<button class="btn btn-biso" type="submit" name="btn_local">ok</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter un étage
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_etage">
						<button class="btn btn-biso" type="submit" name="btn_etage">ok</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter une promotion
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_promotion">
						<button class="btn btn-biso" type="submit" name="btn_promo">
							ok
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter une heure des cours
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_heure">
						<button class="btn btn-biso" type="submit" name="btn_heure">
							ok
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter un jour
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_jour">
						<button class="btn btn-biso" type="submit" name="btn_jour">ok</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter un semestre
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_semestre">
						<button class="btn btn-biso" type="submit" name="btn_semestre">ok</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-biso">
			<div class="panel-heading">
				Ajouter une année academique
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input class="form-control" name="label_annee">
						<button class="btn btn-biso" type="submit" name="btn_annee">ok</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	
	
</div>


 <?php 
 	if (isset($_POST['label_site'])) {
 		SiteInsert();
 	}
 	elseif (isset($_POST['label_local'])) {
 		LocalInsert();
 	}
 	elseif(isset($_POST['label_etage'])){
 		 EtageInsert();
 	}
 	elseif (isset($_POST['label_promotion'])) {
 		PromoInsert();
 	}
 	elseif (isset($_POST['label_heure'])) {
 		HeureInsert();
 	}
 	elseif (isset($_POST['label_jour'])) {
 		JourInsert();
 	}
 	elseif (isset($_POST['label_semestre'])) {
 	SemestreInsert();
 	}
 	elseif (isset($_POST['label_annee'])) {
 		AnneeInsert();
 	}
 include("partials/footer.php");
  ?>