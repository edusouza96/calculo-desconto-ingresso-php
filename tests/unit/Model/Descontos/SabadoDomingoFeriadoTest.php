<?php
namespace Tests\unit\Model\Descontos;

use App\Model\Ingressos\Idoso;
use App\Model\Descontos\SabadoDomingoFeriado;
use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Crianca;
use App\Model\Ingressos\Estudante;

class SabadoDomingoFeriadoTest extends TestCase
{
    public function testDeveRetornar5PorcentoDescontoQuandoIngressoForParaIdosoNoSabadoDomingoFeriado()
    {
        $idoso = new Idoso();
        $sabadoDomingoFeriado = new SabadoDomingoFeriado($idoso);
        $this->assertEquals(5, $sabadoDomingoFeriado->getValor());
    }

    public function testDeveRetornar0PorcentoDescontoQuandoIngressoNaoForParaIdosoNoSabadoDomingoFeriado()
    {
        $estudante = new Estudante(false);
        $sabadoDomingoFeriado = new SabadoDomingoFeriado($estudante);
        $this->assertEquals(0, $sabadoDomingoFeriado->getValor());
        
        $crianca = new Crianca();
        $sabadoDomingoFeriado = new SabadoDomingoFeriado($crianca);
        $this->assertEquals(0, $sabadoDomingoFeriado->getValor());
    }
}
