<?php
class Roteador
{
	private $rotas = array();

	public function adicionaRota(Rota $rota)
	{
		$this->rotas[] = $rota;
		return $this;
	}

	public function fazerRoteamento(Requisicao $req)
	{
		foreach($this->rotas as $rota) {
			if($rota->combinaCom($req)) {
				return $rota;
			}
		}
		die('erro 404 customizado aqui');
	}
}