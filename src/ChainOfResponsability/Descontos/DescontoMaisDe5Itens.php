<?php
namespace Alura\DesignPattern\ChainOfResponsability\Descontos;

use Alura\DesignPattern\ChainOfResponsability\Descontos\Desconto\Desconto;
use Alura\DesignPattern\Shared\Orcamento\Orcamento;

class DescontoMaisDe5Itens extends Desconto {
    public function getValorDesconto(Orcamento $orcamento): float {
        if ($orcamento->quantidadeDeItens > 5) {
            return $orcamento->value * 0.1;
        }
        return parent::getValorDesconto($orcamento);
    }
}