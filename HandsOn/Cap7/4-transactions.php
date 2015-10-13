<?php
$dbPgSql = include 'conexao-pgql.php';
$dados = array(
	array('1', 'Cloves'),
	array('2', 'Maria')
);

$dbPgSql->beginTransaction();

try {
	foreach($dados as $dado) {
		$dbPgSql->exec("INSERT INTO teste VALUES('{$dado[0]}','{$dado[1]}') ");
	}
	$dbPgSql->commit();
} catch(PDOExcepton $e) {
	$dbPgSql->rollback();
	echo $e->getMessage();
}