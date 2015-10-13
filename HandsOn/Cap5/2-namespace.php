<?php
use Dexter\Frete\FreteFixo;
use Dexter\Pedido;


include 'Frete/FreteFixo.php';
include 'Pedido.php';


$frete  = new FreteFixo();
$pedido = new Pedido($frete);
print"<pre>";
print_r($pedido);