<?php
// * Jeito errado
class PedidoErrado
{
	public function getValorToral()
	{
		$totalItens = 50;
		$totalFrete = 20;

		return $totalItens + $totalFrete;
	}

}

$pedido = new PedidoErrado();
echo $pedido->getValorToral(), "<hr />";

//Jeito Certo

class Pedido
{
	private $freteStrategy;

	public function __construct(FreteStrategy $freteStrategy)
	{
		$this->freteStrategy = $freteStrategy;
	}

	public function getValorTotal()
	{
		$totalItens = 50;
		$totalFrete = $this->freteStrategy->getFrete();
		return $totalItens + $totalFrete;
	}
}

interface FreteStrategy
{
	public function getFrete();
}

class FreteFixo implements FreteStrategy
{
	public function getFrete()
	{
		return 20;
	}
}


$freteFixo = new FreteFixo();
$pedido    = new Pedido($freteFixo);
echo $pedido->getValorTotal();




