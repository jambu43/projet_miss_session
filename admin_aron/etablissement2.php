<?php 
    $title = "Home";
    include('partials/head.php');
    include('partials/header.php');
 ?>

	 <!--pannel-footer-->
	 <div class="container">
	 	<div class="well well-md ">
               <table class="table table-condensed"> 
               	 <thead> 
               	 	<form method="" action="" class="form-horizontal">
               	 		<div class="row">
                           <tr>
		               	 	 <th>
		               	 	 	<div class="form-group ">
				           			<div class="">
				                      <label for="">Promotion</label>
				           			   <select class="form-control ">
				           			   	<option></option>
				                         <option name="prom1" id="prom1">P1B</option>
				                         <option name="prom2" id="prom2">P2A</option>
				                         <option name="prom3" id="prom3">AP2C</option>
				           			   </select>
				           			</div>
			           		    </div>
			             	</th>
		               	 	 <th>
		                       <div class="form-group">
			           			<div class="">
			                      <label for="">Local</label>
			           			   <select class="form-control">
			           			   	 <option></option>
			                         <option name="loc1" id="loc1">local1</option>
			                         <option name="loc2" id="loc2">Local2</option>
			           			   </select>
			           			</div>
			           		</div>
		               	 	 </th> 
		               	 	 <th>
		                        <div class="form-group">
			           			 <div class="" >
			                      <label for="">Etage</label>
			           			   <select class="form-control">
			           			   	 <option></option>
			                         <option name="etage1" id="etage1">Etage1</option>
			                         <option name="etage2" id="etage2">Etage2</option>
			                         <option name="etage3" id="etage3">Etage3</option>
			           			   </select>
			           			 </div>
			           		    </div>
		               	 	 </th> 
		               	 	 <th>
		                        <div class="form-group">
			           			<div class="" >
			                      <label for="">Heure</label>
			           			   <select class="form-control">
			           			   	 <option></option>
			                         <option name="heure1" id="heure1">8h-12h</option>
			                         <option name="heure2" id="heure2">12h-16h</option>
			                         <option name="heure3" id="heure3">16h-20h</option>
			           			   </select>
			           			</div>
			           		   </div> 
		               	 	</th>
               	 	</tr> 
               	 	<tr>
                      
               	 	</tr>
               	 </thead>
               	 		</div>
               	 		<input type="submit" value="Etablir" class="btn btn-success btn-md col-lg-2 col-md-push-10" desable="desable">
               	 	</form>
               	  <tbody> 
               	  <tr> 
               	  	<td>you</td> 
               	  	<td>you</td> 
               	  	<td>you</td> 
               	  	<td>you</td> 
               	  </tr> 
               	</tbody> 
               </table> 
	 	</div>
	 </div>
	 
<?php 
    include('partials/footer.php');
?>