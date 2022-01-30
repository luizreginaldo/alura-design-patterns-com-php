<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

//$caluladora = new CalculadoraDeImpostos();
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//
//echo $caluladora->calcula($orcamento, new Iss());

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);
