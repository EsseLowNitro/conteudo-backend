<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../estilo.css">
		<title>haha</title>
	</head>
	<body><div class="auto-margin">
		<h2>alguma coisa</h2>
		<p>muito legal</p>
		<p><sup>operadores lógicos, pra variar</sup></p>

		<table border="1" class="auto-margin">
			<tr>
				<td>and</td>
				<td>e</td>
			</tr>
			<tr>
				<td>or</td>
				<td>ou</td>
			</tr>
			<tr>
				<td>xor</td>
				<td>ou exclusivo</td>
			</tr>
			<tr>
				<td>!</td>
				<td>não!!</td>
			</tr>
			<tr>
				<td>&&</td>
				<td>e</td>
			</tr>
			<tr>
				<td>||</td>
				<td>ou</td>
			</tr>
		</table>

		<br><hr>

		<p>exemplo:</p>

		<pre>&lt?php<br> $media = 6;<br>$faltas = 20;<br>$criterio1 = $media > 6;<br>$criterio2 = $faltas < 25;<br>$resultado = $criterio1 && $criterio2;<br>var_dump($resultado);<br>?&gt</pre>

		<p style="background-color: #FFFFFF12;"><?php
		$media = 6; $faltas = 20;
		$criterio1 = $media > 6;
		$criterio2 = $faltas < 25;
		$resultado = $criterio1 && $criterio2;
		var_dump($resultado);
		?></p>
	</div></body>
</html>