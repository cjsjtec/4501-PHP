<?php

$dbPgSql    = include 'conexao-pgql.php';
$dbPgSql->exec('CREATE TABLE teste (id INT, nome VARCHAR(20))');

//Usando desa maneira quando noao temos nenhuma interpolacao vinto de fora

