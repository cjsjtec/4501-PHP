<?php

class Teste
{
	public function __clone()
	{
		echo 'Sendo clonado';
	}
}

$teste = new Teste();

$teste2 = clone $teste;