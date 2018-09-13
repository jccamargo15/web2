<?php

/**
 * Classe que representa a tabela "clientes" do SGBD
 */
 
class Cliente
{	
	//propriedades (variaveis) que representam as colunas da tabela
	private $idcliente;
	private $nome;
	private $email;
	private $telefone;
	
	public function Cliente () 
	{
		// vazio, método construtor	
	}
	
	
	// métodos GET e SET para as propriedades
	public function getIdcliente(){
		return $this->idcliente;	
	}
	
	public function setIdcliente($idcliente){
		$this->idcliente = $idcliente;	
	}
	
	
	public function getNome(){
		return $this->nome;	
	}
	
	public function setNome($nome){
		$this->nome = $nome;	
	}
	
	
	public function getEmail(){
		return $this->email;	
	}
	
	public function setEmail($email){
		$this->email = $email;	
	}
	
	
	public function getTelefone(){
		return $this->telefone;	
	}
	
	public function setTelefone($telefone){
		$this->telefone = $telefone;	
	}
}




?>