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
			if ($isset($_POST['user'])) {
				if ($_POST['user'] == "esselownitro" && $_POST['password'] == 123) {
					echo "<div style='background-color: #AAFFAA33; border-radius: 20px; padding-bottom: 1px;'><h4><br>Você está logado como " . $_POST['user'] . ".</h4></div>";
				} else {
					echo "<div style='background-color: #FFAAAA33; border-radius: 20px; padding-bottom: 1px;'><h4><br>Login para " . $_POST['user'] . " falhou.</h4></div>";
				}
			} else {
				header("Location: form_login.html");
			}
		?>
	</div></body>
</html>