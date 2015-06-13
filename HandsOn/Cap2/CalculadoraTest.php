<?php
require 'Calculadora.php';

class CalculadoraTest extends PHPUnit_Framework_TestCase
{
	public function testSoma()
	{
		$calculadora = new Calculadora();

		$this->assertSame(3, $calculadora->soma(1 , 2));
		$this->assertSame(5, $calculadora->soma(2 , 3));
		$this->assertSame(7, $calculadora->soma(3 , 4));
		$this->assertSame(9, $calculadora->soma(4 , 5));
		
	}
	
	public function testSubtracao()
	{
		$calculadora = new Calculadora();
		$this->assertSame(1, $calculadora->subtracao(4,3));
		$this->assertSame(1, $calculadora->subtracao(3,2));
		$this->assertSame(1, $calculadora->subtracao(2,1));
		$this->assertSame(1, $calculadora->subtracao(1,0));
	}
}