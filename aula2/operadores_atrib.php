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

		<hr>
		
		<ol style="width: 320px; font-family: monospace;">
			<li><pre> |  = | atribuição simples</pre></li>
			<li><pre> | += | acumula o novo valor</pre></li>
			<li><pre> | -= | subtrai o valor da variável</pre></li>
			<li><pre> | ++ | incrementa 1 ao valor da var.</pre></li>
			<li><pre> | -- | tira 1 do valor da var.</pre></li>
			<li><pre> | .= | junta o texto ao valor da var.</pre></li>
		</ol>

		<br><hr>

		<h3>por exemplo</h3>

		<div><?php
		$nota =  5; echo $nota, "<br>";
		$nota += 5; echo $nota, "<br>";
		$nota -= 2; echo $nota, "<br>";
		$nota ++; echo $nota, "<br>";
		$nota --; echo $nota, "<br>";

		$nome = "bruno"; $nome .= " tavares";
		echo $nome;
		?></div>
	</div></body>
</html>