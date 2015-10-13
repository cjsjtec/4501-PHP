<?php
class Caneta
{
	private $cor;
	private static $tamanho = 10;

	public function __construct($cor)
	{
		$this->cor = $cor;
	}

	public function getCor()
	{
		return $this->cor;
	}

	public static function getTamanho() {
		return self::$tamanho;
	}
}

$canetaAzul = new Caneta('azul');
$canetaPreta = new Caneta('preta');

echo 'Cor: '.$canetaAzul->getCor();
echo ', Tamanho: '.Caneta::getTamanho();
//echo ', Tamanho: '.Caneta::$tamanho;