<?php
class Cliente
{
	private $id;
	private $nome;
	private $cpf;
	private $status = 'A';

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		if(!is_int($id)) {
			throw new InvalidArgumentException('ID invalido');
		}

		$this->id = $id;
		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		if(strlen($nome) > 50) {
			throw new InvalidArgumentException('Nome muito grande');
		}
		$this->nome = $nome;
		return $this;
	}
}

// $cliente = new Cliente();
// $cliente->setId(1)->setNome('Joao');
// echo '<pre>';
// print_r($cliente);
