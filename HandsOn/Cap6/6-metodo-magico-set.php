<?php
class View
{
	private $container;
	public function __construct(Container $container)
	{
		$this->container = $container;
	}
	public function __get($name)
	{
		return $this->container->$name;
	}
	public function __set($name, $value)
	{
		$this->container->$name = $value;
	}

	public function render($file)
	{
		include $file;
	}
}
class Container
{
	public function __set($name, $value)
	{
		$this->$name = htmlentities($value);
	}
}

$view = new View(new Container());
$view->titulo = 'Ola';
$view->texto = 'Bem vindo ao painel administrativo';
$view->render('home.php');
