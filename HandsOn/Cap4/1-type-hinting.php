<?php

class Impressora
{
	public function imprimir(Documento $doc)
	{
		echo $doc->getConteudo();
	}

}

class Documento
{
	private $conteudo;

	public function __construct($conteudo)
	{
		$this->conteudo = $conteudo;
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}
}

$impressora = new Impressora();
$documento  = new Documento('Hello World!');
$impressora->imprimir($documento);