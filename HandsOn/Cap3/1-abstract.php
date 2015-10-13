<?php
abstract class Conta
{
	private $saldo;

	public function __construct($saldoInicial)
	{
		$this->saldo = $saldoInicial;
	}

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
	//PORRA NENhuma POR ENQUANTO
}

class ContaCorrente extends Conta
{
	//PORRA NENhuma POR ENQUANTO
}

$cc = new ContaCorrente();
$cp = new ContaPoupanca();

//$conta = new Conta(); ERRO 
