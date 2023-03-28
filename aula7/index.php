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
				$notas = array(5,6,8);

				echo "valores no array de notas:<br>";
				var_dump($notas); echo "<br><br>";

				echo "tamanho do array de notas:<br>";
				echo sizeof($notas); echo "<br><br>";

				echo "média de todos os valores do array:<br>";
				$media = ($notas[0] + $notas[1] + $notas[3]) / (3);
				echo $media;
			?>
		</p>
	</div></body>
</html>