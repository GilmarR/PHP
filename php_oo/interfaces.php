<?php

	interface EquipamentoEletronicoInterface {
			public function ligar();
			public function desligar();
	}


	class Geladeira implements EquipamentoEletronicoInterface {
		public function abrirGeladeira() {
			echo 'Abrindo geladeira';
		}

		public function ligar() {
			echo 'Ligando';
		}

		public function desligar() {
			echo 'Desligando';
		}
	}

	class TV implements EquipamentoEletronicoInterface {
		public function trocarCanal() {
			echo 'Trocando canal';
		}

		public function ligar() {
			echo 'Ligando';
		}

		public function desligar() {
			echo 'Desligando';
		}
	}

	$x = new Geladeira();
	$y = new TV();

	//----------------

	interface AnimalInterface {
		public function comer();
	}

	interface aveInterface extends AnimalInterface {
		public function voar();
	}

	class Papagaio implements aveInterface {
		public function comer() {
			echo 'comer';
		}

		public function voar() {
			echo 'Voando';
		}
	}

?>