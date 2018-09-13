<?php 

require_once 'class.Cliente.php';
require_once 'class.ClienteDAO.php';


/* receberia esses dados de um formulário HTML 
$nome 		= $_POST['nome'];
$email 		= $_POST['email'];
$telefone 	= $_POST['telefone'];
$id_cliente = $_POST['id_cliente'];
$acao 		= $_POST['acao'];
*/

$id_cliente = '1';
$nome = 'Leonardo';
$email = 'leo@gmail.com';
$telefone = '333333';
$acao = 'insert';

$dao = new ClienteDAO();

switch ($acao) {
	case 'insert':
		//cria objeto do cliente
		$cli = new Cliente();

		//popular objeto do cliente
		$cli->setNome($nome);
		$cli->setEmail($email);
		$cli->setTelefone($telefone);

		//criar objeto de manipulação (DAO) do cliente
		$dao = new ClienteDAO();

		//chamar método que cadastra cliente
		$dao->cadastra($cli);
		break;

	case 'delete':
		//cria objeto do cliente
		$cli = new Cliente();

		//popular objeto do cliente
		$cli->setIdcliente($nome);

		//criar objeto de manipulação (DAO) do cliente
		// $dao = new ClienteDAO();

		//chamar método que cadastra cliente
		$dao->excluir($cli);
		break;
	
	default:
		# code...
		break;
}



 ?>