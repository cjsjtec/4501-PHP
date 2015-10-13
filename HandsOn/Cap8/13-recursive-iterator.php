<?php
$frutas = array(
		'banana',
		array('maca', 'abacaxi'),
		'amora',
		array(
			array(
				array(
					array(
						'pessego'
					),
					'laranga'
				)

			)
		)
	);
echo '<pre>';
print_r($frutas);

$iterator = new ArrayIterator($frutas);
$iterator = new RecursiveArrayIterator($iterator);
$iterator = new recursiveIteratorIterator($iterator);

foreach($iterator as $fruta) {
	echo $fruta, '<br />';
}