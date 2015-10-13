<?php
$dbMySql = include 'conexao-mysql.php';
$dbPgql    = include 'conexao-pgql.php';
echo "<pre>";
print_r(array($dbMySql, $dbPgql));