<?php

namespace Tests\unit\Services;

use PHPUnit\Framework\TestCase;
use App\Services\CalculadoraService;
use App\Interfaces\DescontoInterface;
use App\Interfaces\IngressoInterface;

class CalculadoraServiceTest extends TestCase
{
    public function testDeveRetorna5ComoValorIngressoAposAplicarDesconto50PorcentoNumIngressoCustando10()
    {
        $ingressoMock = $this->getMockBuilder(IngressoInterface::class)->getMock();
        $ingressoMock->method('getValor')->willReturn(10);

        $descontoMock = $this->getMockBuilder(DescontoInterface::class)->getMock();
        $descontoMock->method('getValor')->willReturn(50);

        $calculadoraService = new CalculadoraService();
        $valor = $calculadoraService->aplicarDesconto($ingressoMock, $descontoMock);

        $this->assertEquals(5, $valor);
    
    }
}
