<?php
namespace Tests\unit\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\Quinta;
use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Crianca;
use App\Model\Ingressos\Estudante;

class QuintaTest extends TestCase
{
    public function testDeveRetornar0PorcentoDescontoQuandoIngressoForParaCriancaoNaQuinta()
    {
        $crianca = new Crianca();
        $quinta = new Quinta($crianca);
        $this->assertEquals(0, $quinta->getValor());
    }

    public function testDeveRetornar15PorcentoDescontoQuandoIngressoNaoForParaCriancaoNaQuinta()
    {
        $estudante = new Estudante(false);
        $quinta = new Quinta($estudante);
        $this->assertEquals(15, $quinta->getValor());
        
        $idoso = new Idoso();
        $quinta = new Quinta($idoso);
        $this->assertEquals(15, $quinta->getValor());
    }

    public function testDeveRetornar35PorcentoDescontoQuandoIngressoForParaEstudanteComCarteirinhaNaQuinta()
    {
        $estudante = new Estudante(true);
        $quinta = new Quinta($estudante);
        $this->assertEquals(35, $quinta->getValor());
    }

}
