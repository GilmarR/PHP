<?php

	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}

	/*	function setNome($nome) {
			$this->nome = $nome;
		}

		function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

		function getNome() {
			return $this->nome;
		}

		function getTelefone() {
			return $this->telefone;
		}

		function getNumFilhos() {
			return $this->numFilhos;
		}

		//metodos
		function resumirCadFunc() {
			return "$this->nome possui $this->numFilhos filhos(s), seu número de telefone é $this->telefone";
		}

		function modificarNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		} */
	}

	$x = new Funcionario();
	$x->__set('nome', 'Gilmar');
	$x->__set('telefone', '11 94002-8922');
	$x->__set('numFilhos', 0);
	//echo $x->resumirCadFunc();

	echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos(s), seu número de telefone é ' . $x->__get('telefone')

/*	$x = new Funcionario();
	$x->setNome('Gilmar');
	$x->setTelefone('11 94002-8922');
	$x->setNumFilhos(0);
	//echo $x->resumirCadFunc();

	echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos(s), seu número de telefone é ' . $x->getTelefone()

	-------
	$x = new Funcionario();
	echo $x->resumirCadFunc();
	echo '<br>';
	$x->modificarNumFilhos(2);
	echo $x->resumirCadFunc(); */
?>