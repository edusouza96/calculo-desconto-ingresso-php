<?php

namespace App\Model\Ingressos;

use App\Interfaces\IngressoInterface;

class Idoso implements IngressoInterface
{
    private $valor;

    public function __construct() 
    {
        $this->valor = 6;
    }

    public function getValor()
    {
        return $this->valor;
    }
}

