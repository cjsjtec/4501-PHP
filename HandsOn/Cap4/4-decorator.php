<?php
interface Vendivel
{
	public function getValor();
}

abstract class Adicional implements Vendivel
{
	protected $produto;
	public function __construct(Vendivel $produto)
	{
		$this->produto = $produto;
	}
}

class Calca implements Vendivel
{
	public function getValor()
	{
		return 20;
	}
}

class EmbalagemPresente extends Adicional
{
	public function getValor()
	{
		return $this->produto->getValor() + 5;
	}
}

class Etiqueta extends Adicional
{
	public function getValor()
	{
		return $this->produto->getValor() + 2;
	}
}

$produto = new Etiqueta(new EmbalagemPresente(new Calca()));
echo $produto->getValor();


