<?php
class  Cliente
{
	private $nome;
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}
}

$joao = new Cliente ();

$joao->setNome('Joao');

function mudaNome($obj, $nome)
{
	$obj->setNome($nome);
}
//echo $joao->getNome();

mudaNome($joao, 'Joao guedes');
echo $joao->getNome();

mudaNome(clone $joao, 'Joao jose');
echo $joao->getNome();
