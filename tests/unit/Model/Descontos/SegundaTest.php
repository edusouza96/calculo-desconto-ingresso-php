<?php
namespace Tests\unit\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\Segunda;
use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Crianca;
use App\Model\Ingressos\Estudante;

class SegundaTest extends TestCase
{
    public function testDeveRetornar10PorcentoDescontoNaSegunda()
    {
        $estudante = new Estudante(false);
        $segunda = new Segunda($estudante);
        $this->assertEquals(10, $segunda->getValor());
       
        $crianca = new Crianca();
        $segunda = new Segunda($crianca);
        $this->assertEquals(10, $segunda->getValor());
       
        $idoso = new Idoso();
        $segunda = new Segunda($idoso);
        $this->assertEquals(10, $segunda->getValor());
    }

    public function testDeveRetornar35PorcentoDescontoQuandoIngressoForParaEstudanteComCarteirinhaNaSegunda()
    {
        $estudante = new Estudante(true);
        $segunda = new Segunda($estudante);
        $this->assertEquals(35, $segunda->getValor());
    }

}
