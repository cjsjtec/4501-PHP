<?php
class App
{
	private $frontController;
	public function __construct()
	{
		$roteador = new Roteador();

		$roteador->adicionaRota(new Rota());

		$this->frontController = new FrontController($roteador, new Despachante());
	}
	public function run()
	{
		$this->frontController->run(new Requisicao());
	}
}