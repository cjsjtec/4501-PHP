<?php
class Bd
{
	private static $instance = null;
	private static $config = array();
	private $pdo;

	private function __construct()
	{
		$this->pdo = new PDO (
				self::$config['dsn'],
				self::$config['user'],
				self::$config['password']
		);
	}

	private function __clone() {}

	public static function addConfig($key, $value)
	{
		self::$config[$key] = $value;
	}

	public static function  getInstance()
	{
		if(!self::$instance) {
			self::$instance  = new self();
		}

		return self::$instance;
	}

	public function  __call($name, $args) // eh chamado quando quando nao existe na classe , e faz um proxy para o objeto PDO com a funcao call_user_func_array
	{
		if(method_exists($this->pdo, $name)) {
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
		if(!self::$database) {//encapsula uma logica de configuracao
			$config = include 'config.php';
			Bd::addConfig('dsn', $config['dsn']);
			Bd::addConfig('user', $config['user']);
			Bd::addConfig('password', $config['password']);
			self::$database = Bd::getInstance();
		}
		return self::$database;
	}
}

$factory = new Factory();
$factory->getDb();
//$bd = Factory::getDb();

// $bd = Bd::getInstance();
echo '<pre>';
foreach($bd->query('SELECT * FROM teste') as $teste) {
	print_r($teste);

}
