<?php
	class Conta{
		private $saldo;

		public function  depositar($quantia){
			$this->saldo += $quantia;
		}

		public function sacar($quantia) {
			$this->saldo -= $quantia;
		}
		public function getSaldo() {
			return $this->saldo;
		}
	}
	
	$conta = new Conta();

	$conta->depositar(50);
	$conta->sacar(20);
	echo 'Saldo eh :'.$conta->getSaldo();
	