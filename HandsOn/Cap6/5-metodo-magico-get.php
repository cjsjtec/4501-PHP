<?php
class Cliente
{
	private $nome;
	public function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function __get($prop)
	{
		return $this->$prop;
	}
}

$joao = new Cliente('Joao');

echo $joao->nome;