<?php
namespace Tests\unit\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\Sexta;
use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Crianca;
use App\Model\Ingressos\Estudante;

class SextaTest extends TestCase
{
    public function testDeveRetornar11PorcentoDescontoQuandoIngressoForParaCriancaNaSexta()
    {
        $crianca = new Crianca();
        $sexta = new Sexta($crianca);
        $this->assertEquals(11, $sexta->getValor());
    }

    public function testDeveRetornar0PorcentoDescontoQuandoIngressoNaoForParaCriancaNaSexta()
    {
        $estudante = new Estudante(false);
        $sexta = new Sexta($estudante);
        $this->assertEquals(0, $sexta->getValor());
       
        $idoso = new Idoso();
        $sexta = new Sexta($idoso);
        $this->assertEquals(0, $sexta->getValor());
    }

    public function testDeveRetornar35PorcentoDescontoQuandoIngressoForParaEstudanteComCarteirinhaNaSexta()
    {
        $estudante = new Estudante(true);
        $sexta = new Sexta($estudante);
        $this->assertEquals(35, $sexta->getValor());
    }

}
