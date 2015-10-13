<?php
abstract class Conta
{
	private $saldo;
	protected $nroConta;
	public function __construct($saldoInicial)
	{
		$this->saldo = $saldoInicial;
		$this->gerarNroConta();
	}

//	Regras abstratas so posso criar em classes abstratas!

	abstract  protected function gerarNroConta();// Forca a classe filha ter ter esse metodo a c

	public function depositar($quantia)
	{
		$this->saldo += quantia;
	}

	public function sacar($quantia)
	{
		$this->saldo -= $quantia;
	}
}

class ContaPoupanca extends Conta
{
	protected function gerarNroConta() {
		$this->nroConta = 'cp'.sssrand();
	}
}

class ContaCorrente extends Conta
{
	protected function gerarNroConta() {
		$this->nroConta = 'cc'.sssrand();
	}
}

$cc = new ContaCorrente();
$cp = new ContaPoupanca();

//$conta = new Conta(); ERRO
