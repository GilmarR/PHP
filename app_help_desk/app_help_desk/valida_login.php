<?php

	session_start();

	//variavel que verifica se a autenticacao foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

	//usuarios do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'gilmar@teste.com', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 3, 'email' => 'giovana@teste.com', 'senha' => '1234', 'perfil_id' => 2),
	);

	foreach($usuarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		} else if ($user['email'] == $_POST['email'] && $user['senha'] != $_POST['senha']) {
			$usuario_autenticado_senha = true;
		}

	}

	if($usuario_autenticado) {
		echo 'Usuário autencicado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	} else if ($usuario_autenticado_senha) {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?senha=erro');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}



	/*
	print_r($_GET);

	echo '<br />';

	echo $_GET['email'];
	echo '<br />';
	echo $_GET['senha'];


	print_r($_POST);

	echo '<br />';

	echo $_POST['email'];
	echo '<br />';
	echo $_POST['senha'];
	*/
?>