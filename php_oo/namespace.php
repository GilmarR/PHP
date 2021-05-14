<?php

	namespace A;
	class Cliente implements cadastroInterface {
		public $nome = 'Gilmar';
		public function __get($attr) {
		 	return $this->$attr;
		}

		public function salvar() {
			echo 'Salvando';
		}
	}

	interface cadastroInterface {
		public function salvar();
	}



	namespace B;
	class Cliente implements cadastroInterface {
		public $nome = 'Giovana';
		public function __get($attr) {
		 	return $this->$attr;
		}

		public function remover() {
			echo 'Removendo';
		}
	}

	interface cadastroInterface {
		public function remover();
	}

	

	$c = new \A\Cliente();
	print_r($c);
	echo '<br>';
	echo $c->__get('nome');

?>