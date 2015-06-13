<?php
	class Conta{
		private $saldo;

		public function __construct($saldoInicial) 
		{
			$this->saldo = $saldoInicial;
			
		}

		public function  depositar($quantia) 
		{
			$this->saldo += $quantia;
		}

		public function sacar($quantia) 
		{
			$this->saldo -= $quantia;
		}

		public function getSaldo() 
		{
			return $this->saldo;
		}
	}
	
	
	$conta = new Conta(100);
	echo $conta->getSaldo();