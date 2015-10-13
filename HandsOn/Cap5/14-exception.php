<?php
class DisvisaoPorZeroException extends Exception{}
class ValorInfinitoException extends Exception{}

function dividir($num1, $num2)
{
	if($num2 === 0) {
		if($num1 === 0) {
			throw new ValorInfinitoException('Valor Infinito');
		}
		throw new DisvisaoPorZeroException('Divisao por zero');
	}
	return $num1 /  $num2;
}

try {
	echo dividir(10,2);
	echo dividir(10,5);

} catch(DisvisaoPorZeroException $e) {
	echo $e->getMessage();
} catch(ValorInfinitoException $e) {
	echo $e->getMessage();
} catch(Exception $e) {
	echo $e->getMessage();
}