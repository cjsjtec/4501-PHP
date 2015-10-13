<?php
class MyFn{

	public function __invoke($texto)
	{
		echo $texto;
	}
}

$myFn = new MyFn();

$myFn2 = function($texto){
	echo $texto .  '2';
};

function execute($function, $arg) {
	$function($arg);
}

execute($myFn, 'ola');
execute($myFn2, 'Hello');