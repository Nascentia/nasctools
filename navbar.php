<!DOCTYPE html>
<html>
		<head>
			<title>Dofus Quests</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" type="text/css" href="styles.css">
			<script type="text/javascript" src="scripts.js"></script>
			<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		</head>
		<body>
			<nav id="toolbar">
				<?php 
					$host = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
					if ($host == 'localhost/dofusquests/etapeddg.php') {
				?>
					<progress id="pgbar" max="108" value="0"></progress>
					<button id="loadbutton">Load</button>
				<?php
					}
				?>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="ddg.php">Quête du DDG</a></li>
					<li><a href="#">Quête du Dofus Emeraude</a></li>
					<li><a href="#">Quête du Dofus Pourpre</a></li>
				</ul>
			</nav>
			<noscript class="msg">Le bon fonctionnement de la cheklist nécessite l'activation du JavaScript. Si vous n'avez pas désactivé le JavaScript, il se peut que vous utilisiez un navigateur ancien, qui peut être source de plusieurs problèmes. Pensez à le changer.</noscript>