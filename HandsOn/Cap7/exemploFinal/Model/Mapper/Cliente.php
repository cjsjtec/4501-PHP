<?php
namespace Model\Mapper;

use Model\Entity;
use Model\Gateway;
class Cliente
{
	private $gateway;
	public function save(Entity\Cliente $cliente)
	{
		$this->getGateway()->insert(array(
			'nome' => $cliente->getNome(),
			'cpf'     =>  $cliente->getCpf()
		));
	}

	public function getGateway()
	{
		if(!$this->gateway) {
			$this->gateway = new Gateway\Cliente();
		}
		return $this->gateway;
	}
}