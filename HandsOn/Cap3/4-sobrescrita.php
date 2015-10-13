<?php
class Retangulo 
{
	private $lado1;
	private $lado2;
	
	public function __construct($lado1,$lado2) 
	{
		$this->lado1 = $lado1;
		$this->lado2 = $lado2;
	}
		
	public function getArea()
	{
		return $this->lado1 * $this->lado2;
	} 
}

class Quadrado extends Retangulo
{
	public function __construct($lado)
	{
		parent::__construct($lado, $lado);
	}
}


$retangulo = new Retangulo(10, 15);
$quadrado  = new Quadrado(5);

echo "Red: {$retangulo->getArea()} , Quad:{$quadrado->getArea()}";
