<?php
namespace Model\Db;
class Conn
{
	use Singleton;
	private $pdo;
	private $isConnected = false;
	private static $cfg;
	public static function setCredentials(array $cfg)
	{
		self::$cfg = $cfg;
	}

	private function doConnect()
	{
		if(!$this->isConnected) {
			$this->pdo = new \PDO(
				self::$cfg['dsn'],
				self::$cfg['user'],
				self::$cfg['pass'],
				array(
					\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
					\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
			);
			$this->isConnected = true;
		}
	}

	public function __call($name, array $args)
	{
		if((new \ReflectionClass('PDO'))->hasMethod($name)) {
			$this->doConnect();
			return call_user_func_array(array($this->pdo, $name), $args);
		}
		throw new \InvalidArgumentException('Invalid pdo method name');
	}
}