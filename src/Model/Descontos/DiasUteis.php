<?php
namespace App\Model\Descontos;

use App\Model\Ingressos\Estudante;
use App\Interfaces\DescontoInterface;
use App\Interfaces\IngressoInterface;

abstract class DiasUteis implements DescontoInterface
{
    protected $ingresso;
    protected $valor;

    public function __construct(IngressoInterface $ingresso) 
    {
        $this->ingresso = $ingresso;
        $this->valor = 0;
    }

    public function getValor()
    {
        if($this->isEstudanteComCarteirinha())
            $this->valor = $this->getValoEstudanteComCarteirinha();

        return $this->valor;
    }

    protected function isEstudanteComCarteirinha()
    {
        return ($this->ingresso instanceof Estudante && $this->ingresso->hasCarteirinha());
    }
    protected function getValoEstudanteComCarteirinha()
    {
        return 35;
    }
}
