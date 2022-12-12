<?php
namespace App\Model\Descontos;

use App\Model\Ingressos\Crianca;
use App\Model\Descontos\DiasUteis;

class Quinta extends DiasUteis
{
    public function getValor()
    {
        if($this->ingresso instanceof Crianca){
            $this->valor = 0;        
        }else{
            $this->valor = 15;
        }

        parent::getValor();

        return $this->valor;
    }
}