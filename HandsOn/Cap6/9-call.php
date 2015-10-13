<?php
class Conta
{
	private $nroConta;
	public function __call($name , array $args)
	{
		$property = lcfirst(substr($name, 3));

		switch(substr($name, 0 ,3 ))  {
			case 'get':
				return $this->$property;
				break;
			case 'set':
				$this->$property = $args[0];
				break;
		}
	}
}
$conta = new Conta();
$conta->setNroConta(123);

echo $conta->getNroConta();