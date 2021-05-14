<?php

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

?>