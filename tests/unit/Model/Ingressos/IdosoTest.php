<?php
namespace Tests\unit\Model\Ingressos;

use App\Model\Ingressos\Idoso;
use PHPUnit\Framework\TestCase;

class IdosoTest extends TestCase
{
    public function testDeveRetornarValorDoIngressoDeIdoso()
    {
        $idoso = new Idoso();
        $this->assertEquals(6, $idoso->getValor());
    }

}
