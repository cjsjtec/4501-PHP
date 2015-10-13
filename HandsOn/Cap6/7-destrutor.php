<?php
class Cliente
{
	public function __construct()
	{
		echo 'nasci....';
	}

	public function __destruct()
	{
		echo 'morri..';
	}
}

$cliente = new Cliente();