<?php
// essa classe ArrayObject implementa as tres interfaces anteriores sem modificar o comportamento padrao
class Biblioteca extends ArrayObject
{
	public function getByName($name)
	{
		foreach ($this as $livro) {
			if($livro->nome === $name) {
				return $livro;
			}

		}
	}
}
class Livro
{
	private $nome;
	public function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function __get($property)
	{
		return $this->$property;
	}
}
$livro = new Livro('Harry Potter');

$biblioteca = new Biblioteca();
$biblioteca[] = $livro;

echo count($biblioteca);

if(isset($biblioteca[0])) {
	echo $biblioteca[0]->nome;
	unset($biblioteca[0]);
}


$biblioteca[] =new Livro( 'Senhor dos aneis');
$biblioteca[] = new Livro('Cidade de Papel');

foreach ($biblioteca as $livro) {
	echo $livro->nome, '<br />';
}

echo $biblioteca->getByName('Senhor dos aneis')->nome;

