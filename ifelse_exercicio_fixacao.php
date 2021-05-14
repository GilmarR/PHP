<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		$idade = 14;
		$peso = 60;

		if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
			$DoaSangue = 'Atende todos os requisitos';
			$Apto_doar = true;
		} else if (($idade >= 16 && $idade <= 69) && $peso < 50) {
			$DoaSangue = 'Peso abaixo do requerido';
			$Apto_doar = false;
		} else if (($idade < 16 || $idade > 69) && $peso >= 50) {
			$DoaSangue = 'Idade não adequada para doação';
			$Apto_doar = false;
		} else {
			$DoaSangue = 'Idade e peso não qualificada';
			$Apto_doar = false;
		}

	?>

		<h2>Pessoa atende os requisitos para doação?</h2>
		<?= $Apto_doar ? 'Sim' : 'Não'; ?>
		<p>Motivo: <?= $DoaSangue ?></p>


</body>
</html>