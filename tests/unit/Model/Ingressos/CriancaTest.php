<?php
namespace Tests\unit\Model\Ingressos;

use App\Model\Ingressos\Crianca;
use PHPUnit\Framework\TestCase;

class CriancaTest extends TestCase
{
    public function testDeveRetornarValorDoIngressoDeCriancao()
    {
        $crianca = new Crianca();
        $this->assertEquals(5.5, $crianca->getValor());
    }

}
