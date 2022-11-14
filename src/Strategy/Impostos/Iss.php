<?php

namespace Alura\DesignPattern\Strategy\Impostos;

use Alura\DesignPattern\Shared\Orcamento\Orcamento;
use Alura\DesignPattern\Strategy\Impostos\Imposto\Imposto;

class Iss implements Imposto {
    public function calculaImposto(Orcamento $orcamento) {
        return $orcamento->value * 0.06;
    }
}