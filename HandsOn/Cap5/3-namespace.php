<?php
use Dexter\Frete;
use Dexter\Pedido;


include 'Frete/FreteFixo.php';
include 'Pedido.php';


$frete  = new Frete\FreteFixo();
$pedido = new Pedido($frete);
print"<pre>";
print_r($pedido);