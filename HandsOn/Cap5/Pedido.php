<?php
namespace Dexter;

class Pedido
{
	private $frete;

	public function __construct(Frete\FreteFixo $frete)
	{
		$this->frete = $frete;
	}
}