<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$caluladora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $caluladora->calcula($orcamento, 'ISS');

