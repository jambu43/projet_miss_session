<?php 
    $title = "Home";
    include('partials/head.php');
    include('partials/header.php');
 ?>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="">
						<div class="well well-md">
							<div class="page-header">veuillez faire votre selection ici</div>
							<form  method="post"  action="" class="form-horizontal">
								<div class="row">
									<div class="les3">
										<div class="form-group col-md-3">
											<div class="">
												<label for="">Annee academique</label>
												<select class="form-control">
													<option></option>
													<option name="option1" id="option1">2015/2016</option>
													<option name="option2" id="option2">2016/2017</option>
													<option name="option3" id="option3">2017/2018</option>
												</select>
											</div>
										</div>
										<div class="form-group col-md-3 pull-right">
											<div class="">
												<label for="">Semestre</label>
												<select class="form-control">
													<option></option>
													<option name="semestre1" id="semestre1">1er semestre</option>
													<option name="semestre2" id="semestre2">2ème semestre</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-3 col-md-push-2" >
												<label for="">Sites</label>
												<select class="form-control">
													<option></option>
													<option name="shaumba" id="shaumba">Shaumba</option>
													<option name="mushi" id="mushi">mushi</option>
													<option name="kitega" id="kitega">Kitega</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="  col-md-4 col-md-push-10">
										<input type="submit" value="Suivant" class="btn btn-success btn-md col-lg-5" desable="desable">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer well well-md">
               <?php 
                   header("location:etablissement2.php");
                ?>
			</div>
		</div>
	</div>
	 
<?php 
    include('partials/footer.php');
?>