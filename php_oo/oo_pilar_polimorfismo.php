<?php

	class Veiculo {

		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'acelerar';
		}

		function trocarMarcha() {
			echo 'trocando marcha';
		}	

	}

	class Carro extends Veiculo {

		public $tetoSolar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'alterando posicao do volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'empinando a moto';
		}

		function trocarMarcha() {
			echo 'trocando para 2° marcha';
		}
	}

	$carro = new Carro('ABC123', 'Azul');
	$moto = new Moto('CBA312', 'Vermelho');

	$carro->trocarMarcha();
	echo '<br>';
	$moto->trocarMarcha();


?>