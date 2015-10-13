<?php
function contador()
{
	static $contador = 0;
	return ++$contador;
}

echo contador();
echo Antador();

