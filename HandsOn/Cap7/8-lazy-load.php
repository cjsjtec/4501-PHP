<?php

//Ideia do lazy load eh atrasar a criacao no obj
class Bd
{
	private static $instance = null;//SingleTon
	private static $config = array();
	private $pdo;
	private $isConected = false; //LAZY LOAD atrasa a criacao do objeto so cria quando realmente for necessario
	private function __construct() {}

	private function doConnect()// LAZY LOAD
	{
		if(!$this->isConected) {
			$this->pdo = new PDO (
					self::$config['dsn'],
					self::$config['user'],
					self::$config['password']
			);
			$this->isConected = TRUE;
		}
	}
	private function __clone() {}

	public static function addConfig($key, $value)
	{
		self::$config[$key] = $value;
	}

	public static function  getInstance()
	{//SingleTon
		if(!self::$instance) {
			self::$instance  = new self();
		}

		return self::$instance;
	}

	public function  __call($name, $args) // PROXY - eh chamado quando quando nao existe na classe , e faz um proxy para o objeto PDO com a funcao call_user_func_array
	{
		if((new ReflectionClass('PDO'))->hasMethod($name)) {
			$this->doConnect();// LAZY LOAD
			return call_user_func_array(array($this->pdo, $name), $args);
		}

		throw new InvalidArgumentException('Metodo invalido');
	}

}

class Factory
{
	private static $database;
	public function getDb()
	{
		if(!self::$database) {//encapsula uma logica de configuracao - abstrair a criacao de um segundo obj
			$config = include 'config.php';
			Bd::addConfig('dsn', $config['dsn']);
			Bd::addConfig('user', $config['user']);
			Bd::addConfig('password', $config['password']);
			self::$database = Bd::getInstance();
		}
		return self::$database;
	}
}

// $factory = new Factory();
// $factory->getDb();
$bd = Factory::getDb();

// $bd = Bd::getInstance();
// echo '<pre>';
// foreach($bd->query('SELECT * FROM teste') as $teste) {
// 	print_r($teste);

// }
