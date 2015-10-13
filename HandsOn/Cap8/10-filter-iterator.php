<?php

$frutas = array('banana', 'maca', 'abacaxi', 'amora', 'abacate', 'laranja');

class ComecaComAIterator extends FilterIterator
{
	public function accept()
	{
		$fruta = $this->getInnerIterator()->current();
		return strtolower($fruta[0]) === 'a';
	}
}

$iterator = new ArrayIterator($frutas);
$iterator = new LimitIterator($iterator, 1, 4);
$iterator = new ComecaComAIterator($iterator);

foreach($iterator as $fruta) {
	echo $fruta, '<br />';
}