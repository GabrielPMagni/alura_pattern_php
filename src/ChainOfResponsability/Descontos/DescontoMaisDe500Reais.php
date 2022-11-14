<?php
namespace Alura\DesignPattern\ChainOfResponsability\Descontos;

use Alura\DesignPattern\ChainOfResponsability\Descontos\Desconto\Desconto;
use Alura\DesignPattern\Shared\Orcamento\Orcamento;

class DescontoMaisDe500Reais extends Desconto {
    public function getValorDesconto(Orcamento $orcamento): float {
        if ($orcamento->value > 500) {
            return $orcamento->value * 0.05;
        }
        return parent::getValorDesconto($orcamento);
    }
}