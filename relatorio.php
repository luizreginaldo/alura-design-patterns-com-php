<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$pedido = new Pedido();
$pedido->nomeCliente = 'Luiz Reginaldo';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento.array');

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoXml = new ArquivoXmlExportado('pedido');
$pedidoExportadoZip = new ArquivoZipExportado('pedido.array');

//echo $orcamentoExportadoZip->salvar($orcamentoExportado);
echo $pedidoExportadoXml->salvar($pedidoExportado);