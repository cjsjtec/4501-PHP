<?php
$dbPgSql = include 'conexao-pgql.php';
$dados = array(
	array('1', 'Cloves_2'),
	array('2', 'Maria_2')
);

$dbPgSql->beginTransaction();

$insert = $dbPgSql->prepare('INSERT INTO teste VALUES (:id, :nome)');//  PlaceHouder pode ser com '?'

try {
	foreach($dados as $dado) {
		$insert->execute(array(
			'id'        => $dado[0],
			'nome'  => $dado[1]
		));
	}
	$dbPgSql->commit();

	$select = $dbPgSql->prepare('SELECT * FROM teste WHERE id = :id');
	//$result = $select->fetchAll();   --- Retorna um array

	$select->execute(array('id' => 1));
	echo "<pre>";
	foreach ($select as $value) {
		print_r($value);
	}
} catch(PDOExcepton $e) {
	$dbPgSql->rollback();
	echo $e->getMessage();
}