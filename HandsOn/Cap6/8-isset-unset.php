<?php
class  Container
{
	public function __get($name)
	{
		return $this->$name;
	}

	public function __set($name, $value)
	{
		$this->$name = $value;
	}

	public function __isset($name)
	{
		return isset($this->$name);
	}

	public function __unset($name)
	{
		unset($this->$name);
	}
}

$container = new Container();

$container->titulo = 'Inicio';
if(isset($container->titulo)) {
	echo $container->titulo;
	unset($container->titulo);
}
echo "<pre>";
print_r($container);