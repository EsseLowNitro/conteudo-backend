<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../estilo.css">
		<title>haha</title>
	</head>
	<body><div class="auto-margin">
		<h2>outra coisa</h2>
		<p>não é a mesma</p>
		<sup>trem do for, em php dessa vez</sup><br>
		<sup><sub>(mais legal que js)</sub></sup>

		<br><hr>

		<p style="background-color: #FFFFFF12;">
			<div class="grid">
				<?php
				for($primeiro = 1; $primeiro <= 10; $primeiro++) {
					echo "<div class='tabuada'>";
					for($segundo = 1; $segundo <= 10; $segundo++) {
			    		$resultado = $primeiro * $segundo;
						echo "$primeiro x $segundo = $resultado<br>";
					}
					echo "</div>";
				}
				?>
			</div>
		</p>
	</div></body>
</html>