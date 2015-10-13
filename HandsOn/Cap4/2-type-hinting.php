<?php

interface Imprimivel
{
	public function getConteudo();
}

class Impressora
{
	public function imprimir(Imprimivel $doc)
	{
		echo $doc->getConteudo();
	}

}

class Documento implements Imprimivel 
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

class Planilha implements Imprimivel
{
	private $linhas;
	public function __construct(array $linhas)
	{
		$this->linhas = $linhas;
	}

	public function getConteudo()
	{
		return implode(PHP_EOL, array_map(function ($linha){
			return implode(';', $linha);
		}, $this->linhas));
	}
}

$impressora = new Impressora();
$documento  = new Documento('Hello World!');
$planilha = new Planilha(array(
	array('Hello', 'World'),
	array('Hello2', 'World2'),
	array('Hello3', 'World3')));
$impressora->imprimir($documento);
echo " <pre>";
echo PHP_EOL;
$impressora->imprimir($planilha);
