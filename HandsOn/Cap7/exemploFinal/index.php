<?php
function __autoload($class)
{
	$file = __DIR__ . '/'.str_replace('\\', '/', $class) . '.php';
	//echo $file;
	 require $file;
}

$clienteService = new Model\Service\Cliente();
//Insercao
$clienteService->insert(array(
		'nome' => 'Marisa',
		'cpf'     => '123.456.789-00'
));
//Busca

// foreach ($clienteService->findAll() as $cliente) {
// 	echo "<b>Nome: </b> {$cliente->getNome()}<br />" ;
// 	echo "<b> CPF: </b> {$cliente->getCpf()} <br />";
// }