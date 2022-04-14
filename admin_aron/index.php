<?php 
	$title = "Authentification";
	include ('partials/head.php');
?>
<div class="container-fluid">
	<div class="row">
		<div class="jumbotron blue">
			<h2 class="text-center white_text">
				Bienvenu sur l'interface d'administration de notre application
			</h2>
			<p class="text-center">
				D'ici  vous allez pouvoir gerer les differentes fonctionalité de l'application
			</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row blue">
		<div class="col-md-6 col-md-push-3 ">
		<h2>Authentification</h2>
			<form action="" method="post" class="form-horizontal">
				<label>Pseudo</label><br>
				<input name="login" class="form-control" type="text"><br><br>
				<label>Mot de passe</label><br>
				<input name="password" class="form-control" type="password"><br>
				<input name="auth" value="S'Authentifier" class="btn  btn-default btnau pull-right"  desable="desable" type="submit">
			</form>
		</div>
	</div>
</div>















<?php 
 	include('partials/footer.php');
?>