<?php
// Countable modifica o comportamento da funcao COUNT
class Biblioteca implements Countable
{
	private $livros = array();
	public function count()
	{
		return count($this->livros);
	}
}
$biblioteca = new Biblioteca();
echo count($biblioteca);