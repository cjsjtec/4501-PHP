<?php
namespace Model\Db;

class Factory
{
	use Singleton;
	private $database;

	public function getDb()
	{
		if(!$this->database) {
			Conn::setCredentials(include 'cfg.php');
			$this->database = Conn::getInstance();
		}
		return $this->database;
	}
}