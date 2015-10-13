<?php
trait Loggable
{
	private function log($oq)
	{
		file_put_contents(
			'/tmp/system.log',
			$oq . PHP_EOL,
			FILE_APPEND
		);
	}
}

class Cliente
{
	use Loggable;
	public function salvar()
	{
		$this->log('Salvando cliente');
		//salva clente
		$this->log('Cliente salvo');

	}
}

$cliente = new Cliente();
$cliente->salvar();
$cliente->