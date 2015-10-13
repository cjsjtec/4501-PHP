<?php
namespace A\B\C\D ;
class Teste {
	private $ccc;

	public function aaa() {

	}

	/**
	*@teste
	*/

	public function bbb() {
		echo $this->ccc;
	}

}

$ref = new \ReflectionClass(__NAMESPACE__ . '\\Teste');

echo $ref->getShortName(), "\n";

$bbb = $ref->getMethods()[1];

echo $bbb->getDocComment();
print "<pre>";
print_r($ref->getProperties());
