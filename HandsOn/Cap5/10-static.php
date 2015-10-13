<?php
class Conta
{
	private $nroConta;
	public function __construct()
	{
		$this->nroConta = static::gerarNroConta();
	}
}

class ContaCorrente extends Conta
{
	protected function gerarNroConta()
	{
		return rand();
	}
}
$cc = new ContaCorrente();
print_r($cc);
