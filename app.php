<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Strategy\CalculadoraDeImpostos;
use Alura\DesignPattern\Strategy\Impostos\{Icms, Iss};
use Alura\DesignPattern\Shared\Orcamento\Orcamento;

require "vendor/autoload.php";

$orcamentoCalc = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->value = 1000;

echo $orcamentoCalc->calcula($orcamento, new Icms());

