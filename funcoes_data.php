<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

		/*echo date('d/m/y H:i'). '<br>';

		echo date_default_timezone_get(). '<br>';
		date_default_timezone_set('America/Sao_Paulo');
		echo date('d/m/y H:i'). '<br>';
		echo date_default_timezone_get();

		echo '<hr>' */

		$data_inicial = '2021-02-20';
		$data_final = '2021-03-13';

		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);

		echo $data_inicial . ' - ' . $time_inicial;
	    echo '<br />';
	    echo $data_final . ' - ' . $time_final;

	    $diferenca_times = $time_final - $time_inicial;
	    echo '<br />';
	    echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times;

	    $segundos_existem_dia = 24 * 60 * 60;
	    echo '<br />';
	    echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

	    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
	    echo '<br / >';
	    echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;
	?>

		

</body>
</html>