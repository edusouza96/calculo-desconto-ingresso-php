<?php
namespace App\Model\Descontos;

use App\Model\Descontos\DiasUteis;
use App\Model\Ingressos\Estudante;

class Terca extends DiasUteis
{
    public function getValor()
    {
        if($this->ingresso instanceof Estudante){
            $this->valor =  5;        
        }else{
            $this->valor =  15;        
        }

        parent::getValor();

        return $this->valor;
    }
}