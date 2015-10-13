<?php

$frutas = array('banana', 'maca', 'abacaxi', 'amora', 'abacate', 'laranja');

$iterator = new ArrayIterator($frutas);
$iterator = new LimitIterator($iterator, 0, 3);
foreach($iterator as $fruta) {
	echo $fruta, '<br />';
}