<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Strategy\CalculadoraDeImpostos;
use Alura\DesignPattern\ChainOfResponsability\CalculadoraDeDescontos;
use Alura\DesignPattern\Strategy\Impostos\{Icms, Iss};
use Alura\DesignPattern\Shared\Orcamento\Orcamento;

require "vendor/autoload.php";

$orcamentoCalcImpostos = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->value = 1000;

echo $orcamentoCalcImpostos->calcula($orcamento, new Icms());
echo "\n<br>";
echo $orcamentoCalcImpostos->calcula($orcamento, new Iss());

echo "\n<br>";
echo "\n<br>";

$orcamentoCalcDescontos = new CalculadoraDeDescontos();
$orcamento1 = new Orcamento();
$orcamento1->value = 500;
$orcamento1->quantidadeDeItens = 5;
echo $orcamentoCalcDescontos->calcula($orcamento1);
echo "\n<br>";

$orcamento2 = new Orcamento();
$orcamento2->value = 500;
$orcamento2->quantidadeDeItens = 6;
echo $orcamentoCalcDescontos->calcula($orcamento2);
echo "\n<br>";

$orcamento3 = new Orcamento();
$orcamento3->value = 501;
$orcamento3->quantidadeDeItens = 5;
echo $orcamentoCalcDescontos->calcula($orcamento3);
echo "\n<br>";

$orcamento4 = new Orcamento();
$orcamento4->value = 501;
$orcamento4->quantidadeDeItens = 6;
echo $orcamentoCalcDescontos->calcula($orcamento4);
echo "\n<br>";
