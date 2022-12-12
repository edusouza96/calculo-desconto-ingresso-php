<?php
namespace Tests\unit\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\Quarta;
use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Crianca;
use App\Model\Ingressos\Estudante;

class QuartaTest extends TestCase
{
    public function testDeveRetornar40PorcentoDescontoQuandoIngressoForParaIdosoNaQuarta()
    {
        $idoso = new Idoso();
        $quarta = new Quarta($idoso);
        $this->assertEquals(40, $quarta->getValor());
    }

    public function testDeveRetornar0PorcentoDescontoQuandoIngressoNaoForParaIdosoNaQuarta()
    {
        $estudante = new Estudante(false);
        $quarta = new Quarta($estudante);
        $this->assertEquals(0, $quarta->getValor());
        
        $crianca = new Crianca();
        $quarta = new Quarta($crianca);
        $this->assertEquals(0, $quarta->getValor());
    }

    public function testDeveRetornar35PorcentoDescontoQuandoIngressoForParaEstudanteComCarteirinhaNaQuarta()
    {
        $estudante = new Estudante(true);
        $quarta = new Quarta($estudante);
        $this->assertEquals(35, $quarta->getValor());
    }

}
