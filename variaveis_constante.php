<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php
		/*			 __Variável constante
					|			 _Valor da variável (não é possivel modificar futuramente)
					|			|									*/
		define('BD_URL', 'endereco_bd_dev');
		define('BD_USUARIO', 'usuario_dev');
		define('BD_SENHA', 'senha_dev');

		echo BD_URL . '<br>';
		echo BD_USUARIO . '<br>';
		echo BD_SENHA;

	?>

</body>
</html>