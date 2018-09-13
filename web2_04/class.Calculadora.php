<?php 

class Calculadora
{
	private $valor1;
	private $valor2;
	private $op;
	
	public function Calculadora($valor1, $valor2, $op)
	{
		$this->valor1 = $valor1;
		$this->valor2 = $valor2;
		$this->op = $op;
	}

	public function getValor1() {
		return $this->valor1;
	}

	public function getValor2() {
		return $this->valor2;
	}

	public function getOp() {
		return $this->op;
	}
}
 
?>