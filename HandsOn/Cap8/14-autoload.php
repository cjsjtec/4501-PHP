<?php
spl_autoload_register(function ($class) {
	echo '1';
});

spl_autoload_register(function ($class) {
	echo '2';
});
spl_autoload_register(function ($class) {
	die('deu ruim'); //PSR-4
});

new Teste();