<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Exception;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;

class ListaOrcamentos implements \IteratorAggregate
{
    /**
     * @var Orcamento[]
     */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}