<?php 

require_once 'class.DbAdmin.php';

/**
 * classe de mamipulação do cliente
 * classe DAO sempre recebem um objeto 
 * e retornam um array com um ou mais objetos
 */
class ClienteDAO
{
	private $dba;

	public function ClienteDAO()
	{
		$dba = new DbAdmin('mysql');
		$dba->connect('localhost', 'root', '', 'web2');
		//disponibiliza o objeto criado 
		$this->dba = $dba;
	}

	public function cadastra($cli)
	{
		//atribui o atributo de classe para a variavel
		$dba = $this->dba;

		//retira os dados de dentro do objeto
		$nome 		= $cli->getNome();
		$email 		= $cli->getEmail();
		$telefone 	= $cli->getTelefone();

		//cria comando SQL
		$query = 'INSERT INTO cliente (nome, email, telefone) VALUES ("'.$nome.'", "'.$email.'", "'.$telefone.'")';

		//executar comando SQL
		$dba->query($query);

	}


	public function lista()
	{
		$dba = $this->dba;

		$query = 'SELECT * FROM cliente';

		$res = $dba->query($query);

		$num = $dba->rows($res);

		for ($i=0; $i<$num; $i++) { 
			$idc = $dba->result($res, $i, 'id_cliente');
			$nom = $dba->result($res, $i, 'nome');
			$ema = $dba->result($res, $i, 'email');
			$tel = $dba->result($res, $i, 'telefone');

			$cli = new Cliente();
			$cli->setIdcliente($idc);
			$cli->setNome($nom);
			$cli->setEmail($ema);
			$cli->setTelefone($tel);

			$ver[] = $cli;
		}

		return $ver;
	}

	public function listaUm($cli)
	{
		$dba = $this->dba;

		$idc = $cli->getIdcliente();

		$query = 'SELECT * FROM cliente WHERE id_cliente = '.$idc;

		$res = $dba->query($query);

		$num = $dba->rows($res);

		for ($i=0; $i<=$num; $i++) { 
			$idc = $dba->result($res, $i, 'id_cliente');
			$nom = $dba->result($res, $i, 'nome');
			$ema = $dba->result($res, $i, 'email');
			$tel = $dba->result($res, $i, 'telefone');

			$cli = new Cliente();
			$cli->setIdcliente($idc);
			$cli->setIdcliente($nom);
			$cli->setIdcliente($ema);
			$cli->setIdcliente($tel);

			$ver[] = $cli;
		}

		return $ver;
	}

	public function exlcuir($cli)
	{
		//atribui o atributo de classe para a variavel
		$dba = $this->dba;

		//retira os dados de dentro do objeto
		$idc = $cli->getIdcliente();

		//cria comando SQL
		$query = 'DELETE FROM cliente WHERE id_cliente = "'.$idc.'"';

		//executar comando SQL
		$dba->query($query);

	}

	public function atualiza($cli)
	{
		//atribui o atributo de classe para a variavel
		$dba = $this->dba;

		//retira os dados de dentro do objeto
		$idc 		= $cli->getIdcliente();
		$nome 		= $cli->getNome();
		$email 		= $cli->getEmail();
		$telefone 	= $cli->getTelefone();

		//cria comando SQL
		$query = 'UPDATE FROM cliente SET nome="'.$nome.'", email="'.$email.'", telefone="'.$telefone.'" WHERE id_cliente = "'.$idc.'"';

		//executar comando SQL
		$dba->query($query);

	}


}

 ?>