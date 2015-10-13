<?php
// PRIMEIRA FORMA DE TRATAR UM ERRO E RETORNANDO FALSE
function dividir($num1, $num2)
{
	if($num2 === 0) {
		return FALSE;
	}
	return $num1 /  $num2;
}

if(false !== ($resultado = dividir(10, 2))) {
	echo $resultado;
} else {
	echo 'Deu Ruim !';
}