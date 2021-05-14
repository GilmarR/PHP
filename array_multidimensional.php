<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    
    $lista_coisas = [];

    $lista_coisas['frutas'] = array('Banana', 'Maçã', 'Morango', 'Uva');
    $lista_coisas['pessoas'] = [ 1 => 'João', 2 => 'José', 3 => 'Maria'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo '<hr/>';
    echo $lista_coisas['frutas'][3];
    echo '<br />';
    echo $lista_coisas['pessoas'][2];

    ?>
</body>

</html>