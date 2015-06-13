<?php
class Conta
{
	private $nroConta;
	
	public function __construct()
	{
		$this->gerarNroConta();
	}

	private function gerarNroConta()
	{	
		$this->nroConta = rand();
	}

	public function  getNroConta() 
	{
		return $this->nroConta;
	}
}

$conta = new Conta();

echo 'Numero da conta: '.$conta->getNroConta();
