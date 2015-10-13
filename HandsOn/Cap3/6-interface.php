<?php
interface TV
{
	public function ligar();
	public function desligar();
	public function aumentarVolume();
	public function diminuirVolume();
	public function trocarCanal($canal);
}


class TVSony implements TV
{
	private $estado = 'OFF';
	private $canal  = 5;
	private $volume  = 15;
	
	public function ligar()
	{
		$this->estado = 'ON';	
	}
	
	public function desligar()
	{
		$this->estado = 'OFF';
	}
	
	public function aumentarVolume()
	{
		++$this->volume;
	}
	
	public function diminuirVolume()
	{
		--$this->volume;
	}
	
	public function trocarCanal($canal)
	{
		$this->canal = $canal;
	}
	
}

$tv = new TVSony();

$tv->ligar();
$tv->aumentarVolume();
$tv->trocarCanal(7);
$tv->desligar();

print '<pre>';
print_r($tv);
