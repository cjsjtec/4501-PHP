<?php
class ClienteMapper
{
	private $gateway;
	public function __construct(ClienteGateway $gateway)
	{
		$this->gateway = $gateway;
	}

	public function fetchAll()
	{
		$cliente = array();
		$rs = $this->gateway->fetchAll();
		foreach($rs as $value) {
			$clientes[] = (new Cliente())->setId($value['id'])->setNome($value['nome']);
		}
		return $cliente;
	}

	public function insert(Cliente $cliente)
	{
		$this->gateway->insert(array(
				'id'  		=> $cliente->getId(),
				'nome'  => $cliente->getNome()
		));
	}
}
include '10-gateway.php';
include '9-entity.php';

$bd = (new Factory())->getDb();
$mapper = new ClienteMapper(new ClienteGateway($bd));
$cliente = (new Cliente())->setId(5)->setNome('Fernando');
$mapper->insert($cliente);
foreach ($mapper as $cliente) {
	echo $cliente->getNome();
}