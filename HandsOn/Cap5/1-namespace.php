<?php

include 'Frete/FreteFixo.php';
include 'Pedido.php';

$frete = new Dexter\Frete\FreteFixo();

$pedido = new Dexter\Pedido($frete);
print'<pre>';
print_r($pedido);