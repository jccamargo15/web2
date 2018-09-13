<?php 

/**
* classe Empregado para exercicio
*/
class Empregado
{
	private $nome;
	private $sobrenome;
	private $salario;

	function __construct($nome, $sobrenome, $salario)
	{
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->salario = $salario;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getSobrenome()
	{
		return $this->sobrenome;
	}

	public function setSobrenome($sobrenome)
	{
		$this->sobrenome = $sobrenome;
	}

	public function getSalario()
	{
		return $this->salario;
	}

	public function setSalario($salario)
	{
		if ($salario<=0) {
			$this->salario = 0.0;
		}
		else 
		{
			$this->salario = $salario;
		}
	}
}

 ?>