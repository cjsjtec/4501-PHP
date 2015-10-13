<?php
class Caneta
{
	private $cor;
	public static $tamanho = 10;

	public function __construct($cor)
	{
		$this->cor = $cor;
	}

	public function getCor()
	{
		return $this->cor;
	}
}

$canetaAzul = new Caneta('azul');
$canetaPreta = new Caneta('preta');

echo 'Cor: '.$canetaAzul->getCor();
echo ', Tamanho: '.Caneta::$tamanho;