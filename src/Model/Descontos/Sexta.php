<?php
namespace App\Model\Descontos;

use App\Model\Ingressos\Crianca;
use App\Model\Descontos\DiasUteis;

class Sexta extends DiasUteis
{
    public function getValor()
    {
        if($this->ingresso instanceof Crianca){
            $this->valor = 11;        
        }else{
            $this->valor = 0;        
        }

        parent::getValor();

        return $this->valor;
    }
}