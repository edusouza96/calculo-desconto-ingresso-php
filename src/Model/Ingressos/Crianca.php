<?php
namespace App\Model\Ingressos;

use App\Interfaces\IngressoInterface;

class Crianca implements IngressoInterface
{
    private $valor;

    public function __construct() 
    {
        $this->valor = 5.5;
    }

    public function getValor()
    {
        return $this->valor;
    }
}