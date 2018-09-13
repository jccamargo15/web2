<?php 
	/**
	 * classe de exemplo da aula Programação Web 2 - 02/08/18
	 */
	class Caneta
	{
		private $marca;
		private $ponta;
		private $cor;

		public function Caneta() {
			//
		}

		public function atribuiCor($cor) {
			if ($cor == 'blue' or $cor == 'black') {
				$this->cor = $cor;
			}
			else {
				$this->cor = 'green';
			}
		}

		public function atribuiPonta($ponta) {
			$this->ponta = $ponta;
		}

		public function atribuiMarca($marca) {
			$this->marca = $marca;
		}

		public function mostraCor() {
			echo $this->cor;
		}

		public function mostraPonta() {
			echo $this->ponta;
		}

		public function mostraMarca() {
			echo $this->marca;
		}

		public function escreveMarca() {
			echo '<font size="' . $this->ponta . '" color="' . $this->cor . '">';
			echo $this->marca;
			echo '</font>';
		}

		public function escreveTexto($texto) {
			echo '<font size="' . $this->ponta . '" color="' . $this->cor . '">';
			echo $texto;
			echo '</font>';
		}
	}
	
 ?>