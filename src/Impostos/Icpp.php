<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icpp implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * .03;
        }

        return $orcamento->valor * .02;
    }
}