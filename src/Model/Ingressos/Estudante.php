<?php
namespace App\Model\Ingressos;

use App\Interfaces\IngressoInterface;

class Estudante implements IngressoInterface
{
    private $valor;
    private $carteirinha;

    public function __construct(bool $carteirinha) 
    {
        $this->valor = 8;
        $this->carteirinha = $carteirinha;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function hasCarteirinha()
    {
        return $this->carteirinha;
    }
}