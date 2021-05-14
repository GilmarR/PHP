<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		$usuario_possui_cartao = true;
		$valor_compra = 150;

		$valor_frete = 50;
		$recebeu_desconto_frete = true;

		if ($usuario_possui_cartao && $valor_compra >= 400) {
			$valor_frete = 0;
		} else if ($usuario_possui_cartao && $valor_compra >= 300) {
			$valor_frete = 10;
		} else if ($usuario_possui_cartao && $valor_compra >= 150) {
			$valor_frete = 25;
		} else {
			$recebeu_desconto_frete = false;
		}

	?>

		<h2>Detalhes do pedido:</h2>

		<p>Possui cartão da loja: 
			<!-- Operadores ternário -->
			<?= $usuario_possui_cartao ? 'Sim' : 'Não'; ?>
		 <?php 
			/* if ($usuario_possui_cartao) {
				echo ' Sim';
			} else {
				echo ' Não';
			} */
		?>
			
		</p>

		<p>Valor da compra: <?= $valor_compra ?></p>

		<p>Receu desconto da loja: <?php
		if ($recebeu_desconto_frete) {
			echo 'Sim';
		} else {
			echo 'Não';
		}
		?></p>

		<p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>