<?php
namespace Model\Gateway;

use Model\Db;

class Cliente
{
	private $database;

	public function insert(array $data)
	{
		$stmt = $this->getDb()->prepare('INSERT INTO meus_clientes(nome, cpf) VALUES (:nome, :cpf)');
		$stmt->execute($data);
	}

	public function getDb()
	{
		if(!$this->database) {
			$factory = Db\Factory::getInstance();
			$this->database = $factory->getDb();
		}
		return $this->database;
	}
}