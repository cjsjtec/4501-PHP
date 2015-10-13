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

 	public function __toString()
 	{
 		return (string) $this->nroConta;
 	}
}

$conta = new Conta();
echo 'Conta nro '.$conta;