<?php
	if(file_exists('loaded.sav'))
	{
		$loaded=fopen('loaded.sav','r+');
		for ($i=1; $i<106; $i++) { 
		$saved[$i]=fgetc($loaded);
	}
	fclose($loaded);

	unlink('loaded.sav');
	}
?>
<?php include 'navbar.php';?>
	<section>
		<h1>Quête du Dofus des Glaces</h1>
		<p>
			<span style="text-decoration:underline;font-weight:bold;">Disclamer :</span><br>
			Si vous débutez tout juste la quête il vous est fortement conseillé de remplir les étapes dans l'ordre ! En effet la check list suivante est étudiée de façon à ne refaire aucun donjon deux fois de suite.
			Les étapes où il est nécessaire de dropper des ressources sur le même type de monstre sont également mises côtes à côtes.<br><br>

			<span style="color:red;font-weight:bold;">/!\ ATTENTION /!\ : Raffraichir la page entraine la perte de la progression. Veillez à sauvegarder régulièrement.</span>
		</p>
		<form method="post" action="save.php">
			<input type="submit" value="Save" id="savebutton" />
			<table>
				<thead>
					<td></td>
					<td>Etape</td>
					<td>Titre de la quête</td>
					<td>Instructions</td>
				</thead>
			<?php 
					try {
						$bdd = new PDO('mysql:host=localhost;dbname=dofusquests','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					} catch (Exception $e) {
						die('Error : '.$e->getMessage());
					}
					$quer=$bdd->query('SELECT * FROM ddg');
					$i=1;
					while ($data=$quer->fetch())
					{
					?>
					<tr id="etape<?php echo $data['id'];?>">
						<td><input id="vb<?php echo $data['id'];?>" name="chbx<?php echo $data['id'];?>" type="checkbox" <?php if(isset($saved[$i])&&$saved[$i]!=0){echo "checked";}$i++;?> value="1" onclick="verifyValidity(<?php echo $data['id'];?>);verifyState();" /></td>
						<td><?php echo $data['id'];?></td>
						<td><?php echo $data['name'];?></td>
						<td><?php echo $data['comment'];?></td>
						<td style="display:none;" id="req1<?php echo $data['id'];?>"><?php echo $data['require1'];?></td>
						<td style="display:none;" id="req2<?php echo $data['id'];?>"><?php echo $data['require2'];?></td>
						<td style="display:none;" id="req3<?php echo $data['id'];?>"><?php echo $data['require3'];?></td>
					</tr>
					<?php
				}
				$quer->closeCursor();
				?>
			</table>
		</form>
	</section>
	<div id="loader" style="display:none;">
		<form action="load.php" method="post" enctype="multipart/form-data">
			<label for="loadedfile">Télécharger une sauvegarde : </label><input type="file" name="loadedfile">
			<input type="submit" value="Load"/>
		</form>
	</div>
	<script type="text/javascript">
		verifyState();
		verifyOnReload();
	</script>
<?php include 'footer.php';?>