<?php

class FrontController
{
	private $roteador;
	private $despachante;
	public function __construct(
		Roteador $roteador,
		Despachante $despachante
	)
	{
		$this->roteador        = $roteador;
		$this->despachante = $despachante;
	}

	public function run(Requisicao $req)
	{
		$rota = $this->roteador->fazerRoteamento($req); // ROteador retorna $rota
		$this->despachante->executar($rota);// Despachante executa uma rota
	}
}