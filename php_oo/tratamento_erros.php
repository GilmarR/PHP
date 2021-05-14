<?php

	class exceptionCustomizada extends Exception {

		private $erro = '';

		public function __construct($erro) {
			$this->erro = $erro;
		}

		public function exibirMensagemErroCustomizado() {
			echo '<div style="border: 1px solid #000; padding: 15px; background: red; color: #fff; width: 70px;">';
				echo $this->erro;
			echo '</div>';
		} 
	}

	try {

		throw new exceptionCustomizada('Erro teste');

	} catch (exceptionCustomizada $e) {

		$e->exibirMensagemErroCustomizado();

	}

?>