<?php
class Conta
{
	protected $saldo;
	
	public function sacar($quantia) 
	{
		$this->saldo -= $quantia;		
	}
	
	public function depositar($quantia)
	{
		$this->saldo += $quantia; 
		
	}
	
	public function getSaldo(){
		return $this->saldo;
	}
}

class ContaCorrente extends Conta
{
	private $liberarChequeEspecial = FALSE;
	
	public function liberarChequeEspecial()
	{
		$this->liberarChequeEspecial = TRUE;
	}
}

class ContaPoupanca extends Conta
{
	const JUROS = 0.5;

	public function rendimento($meses)
	{
		$saldo = $this->saldo;

		for($i = 0 ; $i < $meses ; $i++) {
			$saldo += self::JUROS * $saldo / 100;
		}

		return $saldo;		
	}
}

$cc = new ContaCorrente();
$cc->liberarChequeEspecial();

$cp = new ContaPoupanca();
$cp->depositar(5000);
echo $cp->rendimento(12);





