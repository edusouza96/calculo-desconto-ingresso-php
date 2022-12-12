<?php
namespace App\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Interfaces\DescontoInterface;
use App\Interfaces\IngressoInterface;

class SabadoDomingoFeriado implements DescontoInterface
{
    private $valor;

    public function __construct(IngressoInterface $ingresso)
    {
        if($ingresso instanceof Idoso){
            $this->valor = 5;        
        }else{
            $this->valor = 0;        
        }
    }

    public function getValor()
    {
        return $this->valor;
    }
}