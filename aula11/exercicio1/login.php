<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../../estilo.css">
		<title>Resultado</title>
	</head>

	<body><div class="auto-margin">
		<h2>Resultado:</h2>

		<?php
			if ($_GET['user'] == "esselownitro" && $_GET['password'] == 123) {
				echo "<div style='background-color: #AAFFAA33; border-radius: 20px;'><h4>Você está logado como " . $_GET['user'] . ".</h4></div>";
			} else {
				echo "<div style='background-color: #FFAAAA33; border-radius: 20px;'><h4>Login para " . $_GET['user'] . " falhou.</h4></div>";
			}
		?>
	</div></body>
</html>