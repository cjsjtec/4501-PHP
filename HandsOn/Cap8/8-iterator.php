<?php

$frutas = array('banana', 'maca', 'abacaxi');

$iterator = new ArrayIterator($frutas);

foreach($iterator as $fruta) {
	echo $fruta, '<br />';
}