<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

	$valor = 10;
	$valor2 = (float) $valor; #pode se usar double, float, real
	$valor3 = (string) $valor;

	echo $valor. ' ' . gettype($valor);
	echo "<br>";
	echo $valor. ' ' . gettype($valor2);
	echo "<br>";
	echo $valor. ' ' . gettype($valor3);

	?>



</body>
</html>