<?php
namespace App\Model\Descontos;

use App\Model\Descontos\DiasUteis;

class Segunda extends DiasUteis
{
    public function getValor()
    {
        $this->valor = 10;  
        
        parent::getValor();

        return $this->valor;
    }

}