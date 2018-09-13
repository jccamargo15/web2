<?php 

require_once 'class.Cliente.php';
require_once 'class.ClienteDAO.php';

$dao = new ClienteDAO();

$a_cli = $dao->lista();

foreach ($a_cli as $key => $obj) {
	$idc = $obj->getIdcliente();
	$nom = $obj->getNome();
	$ema = $obj->getEmail();
	$tel = $obj->getTelefone();

	echo $idc. ' - '.$nom.' - '.$ema.' - '.$tel;
	echo '<br>';
}


 ?>