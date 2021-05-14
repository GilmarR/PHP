<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		#void
		function exibirBoasVindas() {
			echo 'Bem-vindo a aula de PHP <br>';
		}

		exibirBoasVindas();
	

		#return
		function calcularAreaTerreno($largura, $comprimento) {
			$area = $largura * $comprimento;
			return $area;
		}

		echo calcularAreaTerreno(10, 50);
	?>



</body>
</html>