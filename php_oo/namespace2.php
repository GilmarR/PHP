<?php

	require './bibliotecas/lib1/lib1.php';
	require './bibliotecas/lib2/lib2.php';

	use A\Cliente as Me;
	use B\Cliente;

	$c = new Me();
	print_r($c);
	echo '<br>';
	echo $c->__get('nome');

	echo '<hr>';

	$c = new Cliente();
	print_r($c);
	echo '<br>';
	echo $c->__get('nome');