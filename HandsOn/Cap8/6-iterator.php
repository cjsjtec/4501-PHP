<?php
// Itarator motifica o comportamento do foreach
class Biblioteca implements Countable, ArrayAccess, iterator
{
	private $livros = array();
	private $valid  = true;
	public function count()
	{
		return count($this->livros);
	}

	public function offsetGet($offset)
	{
		return $this->livros[$offset];
	}

	public function offsetSet($offset, $value)
	{
		if($offset) {
			$this->livros[$offset] = $value;
		} else {
			$this->livros[] = $value;
		}
	}

	public function offsetExists($offset)
	{
		return isset($this->livros[$offset]);
	}
	public function offsetUnset($offset)
	{
		unset($this->livros[$offset]);
	}

	public function next()
	{
		if(next($this->livros) === FALSE) {
			$this->valid = FALSE;
		}
	}

	public function valid()
	{
		return $this->valid;
	}

	public function key()
	{
		return key($this->livros);
	}

	public function current()
	{
		return current($this->livros);
	}

	public function rewind()
	{
		reset($this->livros);
	}
}

$biblioteca = new Biblioteca();
$biblioteca[] = 'Harry Potter';

echo count($biblioteca);

if(isset($biblioteca[0])) {
	echo $biblioteca[0];
	unset($biblioteca[0]);
}


$biblioteca[] = 'Senhor dos aneis';
$biblioteca[] = 'Cidade de Papel';
$biblioteca[] = 'A culpa e das estrelas';

foreach ($biblioteca as $livro) {
	echo $livro, '<br />';
}



