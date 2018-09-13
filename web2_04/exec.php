<?php 
	require_once 'class.Calculadora.php';
	require_once 'class.CalculadoraDAO.php';

	$v1 = $_POST['valor1'];
	$v2 = $_POST['valor2'];
	$op = $_POST['op'];

	$calc = new Calculadora($v1, $v2, $op);

	$caldDAO = $calc;

 ?>