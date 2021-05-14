<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		$num = 5.5;
		$num2 = 5.4;

		echo 'arredonda para cima '. ceil($num). '<br>';
		echo 'arredonda para baixo '. floor($num). '<br>';
		echo 'arredondamento com base a casa decimais '. $num . ' vai para '. round($num). '<br>';
		echo 'arredondamento com base a casa decimais '. $num2 . ' vai para '. round($num2). '<br>';
		echo 'Gera um numero aleatorio entre 5 e 20: '. rand(5, 20). '<br>';
		echo 'raiz quadrada de 9 é: '. sqrt(9);

	?>

		

</body>
</html>