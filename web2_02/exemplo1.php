<?php 
	require_once('class.Caneta.php');

	$bic = new Caneta();

	$bic->atribuiCor('blue');

	$bic->atribuiPonta(2);

	$bic->atribuiMarca('Bic');

	$bic->escreveMarca();

	echo "<br>";

	$fc = new Caneta();

	$fc->atribuiCor('red');

	$fc->atribuiPonta(5);

	$fc->atribuiMarca('Faber Castell');

	$fc->escreveTexto('Texto escrito pela caneta')
 ?>