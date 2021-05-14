<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		$texto = 'Curso de PHP';
		$texto2 = 'curso de php';

		echo $texto . '<br>';
		echo strtolower($texto);
		echo '<br>';
		echo strtoupper($texto);
		echo '<br>';
		echo ucfirst($texto2);
		echo '<br>';
		echo strlen($texto);
		echo '<br>';
		echo str_replace('PHP', 'JavaScript', $texto);
		echo '<br>';
		echo str_replace('.', ',', '25.50');
		echo '<br>';
		echo substr($texto, 9, 11);


	?>

		

</body>
</html>