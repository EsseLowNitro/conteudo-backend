<?php

$produto1 = ["tipo" => "Smartphone", "marca" => "Samsung", "modelo" => "Galaxy S23", "preço" => "$5400"];
$produto2 = ["tipo" => "Smartphone", "marca" => "Google", "modelo" => "Pixel 8", "preço" => "$6500"];
$produto3 = ["tipo" => "Smartphone", "marca" => "Apple", "modelo" => "iPhone 14", "preço" => "$7600"];
$produto4 = ["tipo" => '"Notebook"', "marca" => "Google", "modelo" => "Pixel Tablet", "preço" => "$9200"];
$produto5 = ["tipo" => "Notebook", "marca" => "Apple", "modelo" => "Macbook Air (M1)", "preço" => "$11600"];
$produtos = [$produto1, $produto2, $produto3, $produto4, $produto5];

echo "<table align='center' style='border-radius: 20px; border: 2px solid'>";

for ($contador=0; $contador <= 4 ; $contador++) {
	echo "<tr>";
	foreach ($produtos[$contador] as $valor) {
		echo "<td style='padding: 5px;'>" . $valor . "</td>";
	}

	echo "</tr>";
}

echo "</table>";
?>