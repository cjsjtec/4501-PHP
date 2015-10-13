<?php
class Rota
{
	public function combinaCom(Requisicao $req)
	{
		return (trim($req->getUrl(), '/') === 'hello-world');
	}

	public function executar()
	{
		$controller = 'Controllers\\HelloWorld';
		$metodo = 'imprimir';
		(new $controller)->$metodo();
	}

}