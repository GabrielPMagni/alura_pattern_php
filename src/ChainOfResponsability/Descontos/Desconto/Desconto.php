<?php

namespace Alura\DesignPattern\ChainOfResponsability\Descontos\Desconto;

use Alura\DesignPattern\Shared\Orcamento\Orcamento;

abstract class Desconto {
    private ?Desconto $proximoDesconto = null;
    public function setProximoDesconto(?Desconto $proximoDesconto) {
        $this->proximoDesconto = $proximoDesconto;
    }

    public function getValorDesconto(Orcamento $orcamento): float {
        if (!$this->proximoDesconto) {
            return 0;
        }
        return $this->proximoDesconto->getValorDesconto($orcamento);
    }
}