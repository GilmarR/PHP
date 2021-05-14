<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    
    	$itens = array('sofá', 'mesa', 'cadeira', 'geladeira', 'fogão');

    	foreach ($itens as $item) {
    		echo "$item ";

    		if ($item == 'geladeira') {
    			echo 'com 30% de desconto, aproveite!';
    		}

    		echo "<br>";
    	}

    ?>
</body>

</html>