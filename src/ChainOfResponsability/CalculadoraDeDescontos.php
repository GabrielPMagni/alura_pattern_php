<?php

namespace Alura\DesignPattern\ChainOfResponsability;

use Alura\DesignPattern\ChainOfResponsability\Descontos\{DescontoMaisDe5Itens, DescontoMaisDe500Reais};
use Alura\DesignPattern\Shared\Orcamento\Orcamento;

class CalculadoraDeDescontos {
    public function calcula(Orcamento $orcamento): float {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens();
        $cadeiaDeDescontos->setProximoDesconto(
            new DescontoMaisDe500Reais()
        );
        return $cadeiaDeDescontos->getValorDesconto($orcamento);
    }
}