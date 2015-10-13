<?php
// $dbPgSql = include 'conexao-pgql.php';
$dbMySql = include 'conexao-mysql.php';

try {
	$banners = $dbMySql->query('SELECT * FROM banner');

	echo "<pre>";
	foreach($banners as $banner) {
		print_r($banner);
	}

} catch(PDOException $e) {
	echo $e->getMessage();
}
