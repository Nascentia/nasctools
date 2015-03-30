<?php include 'navbar.php';?>
	<div id="progbar">
		<p> Progression :</p>
		<progress id="pgbar" max="108" value="0"></progress>
	</div>
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
				<td><input id="vb<?php echo $data['id'];?>" name="chbx<?php echo $data['id'];?>" type="checkbox" value="1" onclick="verify(<?php echo $data['id'];?>);" /></td>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['name'];?></td>
				<td><?php echo $data['comment'];?></td>
				<td style="display:none;" id="req<?php echo $data['id'];?>"><?php echo $data['require'];?></td>
			</tr>
			<?php
		}
		$quer->closeCursor();
		?>
	</table>
	<script type="text/javascript">
		verif();
	</script>
<?php include 'footer.php';?>