<?php
namespace App\Services;

use App\Interfaces\DescontoInterface;
use App\Interfaces\IngressoInterface;

class CalculadoraService
{
    public function aplicarDesconto(IngressoInterface $tipoIngresso, DescontoInterface $desconto)
    {
        $valorIngresso = $tipoIngresso->getValor();
        return $valorIngresso - ($valorIngresso * ($desconto->getValor()/100));
    }
}