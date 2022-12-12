<?php
namespace Tests\unit\Model\Ingressos;

use PHPUnit\Framework\TestCase;
use App\Model\Ingressos\Estudante;

class EstudanteTest extends TestCase
{
    public function testDeveRetornarValorDoIngressoDeEstudande()
    {
        $estudante = new Estudante(false);
        $this->assertEquals(8, $estudante->getValor());
    }
   
    public function testDeveRetornarTrueQuandoEstudanteTiverCarteirinha()
    {
        $estudante = new Estudante(true);
        $this->assertTrue($estudante->hasCarteirinha());
    }
   
    public function testDeveRetornarFalseQuandoEstudanteTiverCarteirinha()
    {
        $estudante = new Estudante(false);
        $this->assertFalse($estudante->hasCarteirinha());
    }

}
