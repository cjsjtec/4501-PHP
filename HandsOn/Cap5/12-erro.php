<?php

function dividir($num1, $num2)
{
	if ($num2 === 0) {
		trigger_error('Deu Ruim');
		return;
	}

	return $num1 /  $num2;
}

echo dividir(10, 2);
echo dividir(10, 0);