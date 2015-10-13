<?php //Mapeia a entidade enviando para o gateway e devolvendo um aentidade para o VO
class ClienteGateway
{
	private $bd;
	public function __construct(Bd $bd)
	{
		$this->bd = $bd;
	}

	public function insert(array $data)
	{
		$stmt = $this->bd->prepare('INSERT INTO teste VALUES (:id, :nome)');

		$stmt->execute($data);
	}
	public function fetchAll()
	{
		return $this->bd->query('SELECT * FROM teste')->fetchAll();
	}
}

include '8-lazy-load.php';
$bd = (new Factory())->getDb();
$gateway = new ClienteGateway($bd);

$gateway->insert(array('id' => 4 , 'nome' => 'CLOVES'));
// echo '<pre>';
// foreach($gateway->fetchAll() as $cliente) {
// 	print_r($cliente);
// }
// echo