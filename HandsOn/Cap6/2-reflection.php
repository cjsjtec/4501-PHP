<?php

class Carro
{
	public function __construct($modelo, $ano, $cor)
	{
		//...
		echo $modelo, $ano, $cor, '<br />';
	}

}

class  Casa
{
	public function __construct($cidade, $cor)
	{
		echo $cidade, $cor , '<br />';
	}
}

$casa = new Casa('Sao Paulo', 'azul');
$car   = new Carro('Palio', '2000', 'preto');

function build($class, array $args)
{
	$ref = new ReflectionClass($class);
	return $ref->newInstanceArgs($args);
}

$casa   = build('Casa', array('Sao Paulo', 'azul'));
$carro  = build('Carro', array('Palio', '2000', 'preto'));