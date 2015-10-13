<?php
//
spl_autoload_register(function ($class) {
	$name =  str_replace('\\', '/' , $class);
	$file      = __DIR__.'/'.$name.'.php';
	require $file;
});

(new App())->run();