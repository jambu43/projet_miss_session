<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-condensed">
					<u>
						<h4>
							OCCUPATION DES LOCAUX PAR LES PROMOTIONS(<span>2016/2017</span>) A PARTIR DU 13 MARS 2017
						</h4>
					</u>
					<thead>
						<tr class="active">
							<th>jours/Locaux</th>
							<th>Heure</th>
							<th>LUNDI</th>
							<th>MARDI</th>
							<th>MERCREDI</th>
							<th>JEUDI</th>
							<th>VENDREDI</th>
							<th>SAMEDI</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($assocLocSelecs = $assocLocSelec->fetch()) { ?>
						<tr>
							<td rowspan="3" class="text-center">
								<?php echo $assocLocSelecs['label_etage'] ?> <br>
								<?php echo $assocLocSelecs['label_local'] ?>
							</td>
							<td>
								8h-12h
							</td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="8h-12h" AND $occupations['label_jour']=="lundi"  AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="8h-12h" AND $occupations['label_jour']=="mardi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="8h-12h" AND $occupations['label_jour']=="mercredi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="8h-12h" AND $occupations['label_jour']=="jeudi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="8h-12h" AND $occupations['label_jour']=="vendredi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="8h-12h" AND $occupations['label_jour']=="samedi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
						</tr>
							
						<tr>
							<td>12h-16</td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="12h-16h" AND $occupations['label_jour']=="lundi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="12h-16h" AND $occupations['label_jour']=="mardi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="12h-16h" AND $occupations['label_jour']=="mercredi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="12h-16h" AND $occupations['label_jour']=="jeudi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="12h-16h" AND $occupations['label_jour']=="vendredi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="12h-14h" AND $occupations['label_jour']=="samedi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
						</tr>
						<tr>
							<td>16h-20h</td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="16h-20h" AND $occupations['label_jour']=="lundi"  AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="16h-20h" AND $occupations['label_jour']=="mardi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="16h-20h" AND $occupations['label_jour']=="mercredi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="16h-20h" AND $occupations['label_jour']=="jeudi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="16h-20h" AND $occupations['label_jour']=="vendredi" AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre'] ) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
							<td><?php 
							while ($occupations = $occupation->fetch()){
								if ($occupations['label_heure']=="16h-20h" AND $occupations['label_jour']=="samedi"  AND $occupations['label_site']== $_POST['site'] AND $occupations['label_annee']== $_POST['annee'] AND $occupations['label_semestre']== $_POST['semestre']) {
									echo $occupations['label_promotion'].'<br>';
								}
								} ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>		
</div>


SELECT *
FROM `horaire`
INNER JOIN `site` ON site.label_site = "site1"
INNER JOIN `annee` ON annee.label_annee =2017
INNER JOIN `semestre` ON semestre.label_semestre = "1semestre"