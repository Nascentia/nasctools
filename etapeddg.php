<?php include 'navbar.php';?>
	<div id="progbar">
		<p> Progression :</p>
	</div>
	<section>
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
					while ($data=$quer->fetch())
					{
					?>
					<tr id="etape<?php echo $data['id'];?>">
						<td><input id="vb<?php echo $data['id'];?>" name="chbx<?php echo $data['id'];?>" type="checkbox" <?php if(isset($saved)&&$saved!=0){echo "checked";} ?> value="1" onclick="verifyValidity(<?php echo $data['id'];?>);verifyState();" /></td>
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
	<script type="text/javascript">
		verifyState();
		verifyOnReload();
	</script>
<?php include 'footer.php';?>