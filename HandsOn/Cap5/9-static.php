<?php
//late static binding

abstract class Validator
{
	public static function isValid($oq)
	{
		$validator = new static();
		return $validator->validate($oq);
	}
	abstract protected function validate($oque);
}

class Integer extends Validator
{
	public function validate($oq)
	{
		return is_int($oq);
	}
}

class String extends Validator
{
	public function validate($oq)
	{
		return is_string($oq);
	}
}

var_dump(String::isValid('Hello world'));
var_dump(Integer::isValid(5));
