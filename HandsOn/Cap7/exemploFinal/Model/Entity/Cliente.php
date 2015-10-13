<?php
namespace Model\Entity;

class Cliente
{
	private $nome;
	private $cpf;

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		if(strlen($nome) > 50) {
			throw new \InvalidArgumentException('Nome Maior que o permitido');
		}
		$this->nome = $nome;
		return $this;
	}
	public function getCpf()
	{
		return $this->cpf;
	}

	public function setCpf($cpf)
	{
		$cpf = str_replace(array('.', '-'), '', $cpf);

		if(strlen($cpf) !== 11) {
			throw new \InvalidArgumentException('CPF Invalido');
		}

		$this->cpf = $cpf;
		return $this;
	}
}