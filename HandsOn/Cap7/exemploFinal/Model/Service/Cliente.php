<?php
namespace Model\Service;

use Model\Entity;
use Model\Mapper;

class Cliente
{
	private $mapper;
	public function insert(array $data)
	{
		$cliente = (new Entity\Cliente())->setNome($data['nome'])->setCpf($data['cpf']);
		$this->getMapper()->save($cliente);
	}
	public function getMapper() {
		if(!$this->mapper) {
			$this->mapper = new Mapper\Cliente();
		}
		return $this->mapper;
	}
}