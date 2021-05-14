<?php

	class Pai {
		private $nome = 'Gilmar';
		protected $sobrenome = 'Ramos';
		public $humor = 'Feliz';

	/*	public function __get($attr) {
			return $this->$attr;
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}
	*/
		private function executarMania() {
			echo 'Estralar os dedos';
		}

		protected function responder() {
			echo 'Olá';
		}

		public function executarAcao() {

		}
	}

	class Filho extends Pai {
		public function getAtributo($attr) {
			return $this->$attr;
		}

		public function setAtributo($attr, $value) {
			$this->$attr = $value;
		}
	}

	$filho = new Filho();
	echo '<pre>';
	print_r ($filho);
	echo '</pre>';
	echo '<hr>';
	echo 'Sobre nome:';
	echo '<br>';
	echo $filho->getAtributo('sobrenome');
	$filho->setAtributo('sobrenome', 'Guedes');
	echo '<hr>';
	echo 'Sobre nome modificado:';
	echo '<br>';
	echo $filho->getAtributo('sobrenome');

?>