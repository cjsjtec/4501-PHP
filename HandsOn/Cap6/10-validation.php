<?php
class v
{
	private $validacoes = array();
	public static function  __callStatic($name, array $args)
	{
		$v = new self;
		$class = ucfirst($name);
		$v->validacoes[] = $v->build ($class, $args);
	}

	public function __call($name, array $args)
	{
		$class = ucfirst($name);
		$this->validacoes[] = $this->build ($class, $args);
	}

	public function build($class, array $args)
	{
		$ref = new ReflectionClass($class);
		return $ref->newInstanceArgs($args);
	}
}

class Integer
{
	public function validate($nro)
	{
		return is_int($nro);
	}
}

class Between
{
	private $de;
	private $ate;
	public function  __construct($de, $ate)
	{
		$this->de  = $de;
		$this->ate = $ate;
	}

	public function validate($nro)
	{
		return ($nro >= $this->de && $nro <= $this->ate);
	}
}

$validator = v::integer()
				->between(5,10);

var_dump($validator->validate(2));
var_dump($validator->validate(6));
/*
$validator = v::string()
				->length(10);
var_dump($validator->validate('oi'));
var_dump($validator->validate('abcdefghij'));


$validator = v::integer()
			->odd()
			->prime()
			->biggerThan(100);

var_dump($validator->validate(101));
var_dump($validator->validate(93));


/*