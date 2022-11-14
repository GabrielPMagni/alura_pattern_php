<?php

namespace Alura\DesignPattern\Strategy;

use Alura\DesignPattern\Shared\Orcamento\Orcamento;
use Alura\DesignPattern\Strategy\Impostos\Imposto\Imposto;

class CalculadoraDeImpostos {
    public function calcula(Orcamento $orcamento, Imposto $tipoImposto): float {
        return $tipoImposto->calculaImposto($orcamento);
    }
}