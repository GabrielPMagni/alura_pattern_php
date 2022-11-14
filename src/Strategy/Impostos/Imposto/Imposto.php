<?php

namespace Alura\DesignPattern\Strategy\Impostos\Imposto;

use Alura\DesignPattern\Shared\Orcamento\Orcamento;

interface Imposto {
    public function calculaImposto(Orcamento $orcamento);
}
