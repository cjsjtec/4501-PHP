<?php
$estoque = new SplObjectStorage();

class livro
{
	private $autor;
	private $nome;
	public function __construct($autor, $nome)
	{
		$this->autor  = $autor;
		$this->nome = $nome;
	}

	public function __get($property)
	{
		return $this->property;
	}


}
$harryPotter = new Livro('J.K Rowling', 'Hary Potter');
$senhorDosAneis = new Livro('J.R.R Tolkien', 'LOTR');

$estoque[$harryPotter] = 4;
$estoque[$senhorDosAneis] = 10;

if($estoque->contains($harryPotter)) {
	echo $estoque[$harryPotter];
}