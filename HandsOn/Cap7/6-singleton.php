<?php
/*Singletom instancia o obj na memoria somente uma vez */
class Bd
{
	private static $instance = null;
	private $pdo;

	public function __construct()
	{
		$this->pdo = include 'conexao-pgsql.php';
	}

	private function __clone() {}

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

$bd = Bd::getInstance();
echo '<pre>';
foreach($bd->query('SELECT * FROM teste') as $teste) {
	print_r($teste);

}
