<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    
    	$funcionarios = array(
            array('nome' => 'Antonio', 'salario' => 1600), 
            array('nome' => 'Luiz', 'salario' => 2200),
            array('nome' => 'Andresa','cargo' => 'Gerente' ,'salario' => 2620), 
            array('nome' => 'Mariana', 'salario' => 3000) 
            );

        echo'<pre>';
        print_r($funcionarios);
        echo'</pre>';

        echo "<hr>";

        foreach ($funcionarios as $idx => $funcionario) {
            
            foreach ($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";
            }
            echo "<hr>";
        }

    ?>
</body>

</html>