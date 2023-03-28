<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../estilo.css">
		<title>vector</title>
	</head>
	<body><div class="auto-margin">
		<h2>não funciona</h2>
		<p>não funciona</p>
		<sup>não funciona</sup><br>

		<br><hr>

		<p style="background-color: #FFFFFF12;">
			<?php
				$alunos = [
					"nome" => "Bruno",
					"nota1" => 7,
					"nota2" => 9
				];

				echo "valores no array alunos:<br>";
				var_dump($alunos); echo "<br><br>";

				$alunos["total"]
			?>
		</p>
	</div></body>
</html>