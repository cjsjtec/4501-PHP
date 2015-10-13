<?php

function dividir($num1, $num2)
{
	if($num2 === 0) {
		throw new Exception('Deu Ruim');
	}
	return $num1 /  $num2;
}

try {
	echo dividir(10,2);
	echo dividir(10,0);
} catch(Exception $e) {
	echo $e->getMessage();
}