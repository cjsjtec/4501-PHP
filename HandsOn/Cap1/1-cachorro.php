<?php
	class Cachorro{
		public $nome;
		public $raca;
		public $idade;
	}

	$lion = new Cachorro();

	$lion->nome  = "Lion Ze ruela";
	$lion->raca  = "Vira Lata - Dalmata";
	$lion->idade = 5;
	
	var_dump($lion);
	//echo $lion->nome."<br/>";
	//echo $lion->raca."<br/>";
	///echo $lion->idade."<br/>";
