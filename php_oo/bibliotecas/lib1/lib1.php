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

?>