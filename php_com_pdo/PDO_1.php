<?php
/*
	$conexao = new PDO('mysql:host=localhost;dbname=php_com_pdo', 'root', ''); */

	$serve = 'mysql:host=localhost;dbname=php_com_pdo';
	$local = 'root';
	$senha = '' ;

	try {
		$conexao = new PDO($serve, $local, $senha);
		/*
		$query = ' 
			create table tb_usuario(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(50) not null
			)
		';

		$retorno = $conexao->exec($query);

		echo $retorno;
		

		$query = '
			insert into tb_usuario(
				nome, email, senha 
			)value(
				"Gilmar","gilmar@teste.com","1234"	
			);
			insert into tb_usuario(
				nome, email, senha 
			)value(
				"Giovana","Giovana@teste.com","1234"	
			)
		';
		$conexao->exec($query);
		*/

		$query = '
			select * from tb_usuario
		';

		foreach ($conexao->query($query) as $key => $value) {
			print_r($value['nome']);
			echo '<hr>';
		}

		//$stmt = $conexao->query($query);
		//$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

		//echo '<pre>';
		//print_r($lista);
		//echo '</pre>';


	} catch(PDOException $e) {
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
	}
	
