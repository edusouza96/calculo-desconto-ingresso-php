<?php
namespace Tests\unit\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\Terca;
use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Crianca;
use App\Model\Ingressos\Estudante;

class TercaTest extends TestCase
{
    public function testDeveRetornar5PorcentoDescontoQuandoIngressoForParaEstudanteNaTerca()
    {
        $estudante = new Estudante(false);
        $terca = new Terca($estudante);
        $this->assertEquals(5, $terca->getValor());
    }

    public function testDeveRetornar15PorcentoDescontoQuandoIngressoNaoForParaEstudanteNaTerca()
    {
        $crianca = new Crianca();
        $terca = new Terca($crianca);
        $this->assertEquals(15, $terca->getValor());
       
        $idoso = new Idoso();
        $terca = new Terca($idoso);
        $this->assertEquals(15, $terca->getValor());
    }

    public function testDeveRetornar35PorcentoDescontoQuandoIngressoForParaEstudanteComCarteirinhaNaTerca()
    {
        $estudante = new Estudante(true);
        $terca = new Terca($estudante);
        $this->assertEquals(35, $terca->getValor());
    }

}
