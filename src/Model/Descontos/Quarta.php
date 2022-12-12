<?php
namespace App\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\DiasUteis;

class Quarta extends DiasUteis
{
    public function getValor()
    {
        if($this->ingresso instanceof Idoso){
            $this->valor = 40;
        }else{
            $this->valor = 0;
        }

        parent::getValor();

        return $this->valor;
    }
}