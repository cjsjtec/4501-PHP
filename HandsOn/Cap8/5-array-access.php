<?php

class Biblioteca implements Countable, ArrayAccess
{
	private $livros = array();

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
}
$biblioteca = new Biblioteca();
$biblioteca[] = 'Harry Potter';

echo count($biblioteca);

if(isset($biblioteca[0])) {
	echo $biblioteca[0];
	unset($biblioteca[0]);
}



