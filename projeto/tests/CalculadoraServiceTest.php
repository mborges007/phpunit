<?php

use PHPUnit\Framework\TestCase;

require_once 'src/CalculadoraServices.php'; 

class CalculadoraServiceTest extends TestCase {
    public function testCalculateSum() {
        // criar um mock da classe 
        $mockCalculadora = $this->createMock(Calculadora::class);

        // configurar o mock para retornar um valor
        $mockCalculadora->method('add')->willReturn(10);

        // instanciar CalculadoraService com o mock da calculadora
        $service = new CalculadoraService($mockCalculadora);

        // testa o método que usa o mock
        $result = $service->calculateSum(2, 3);
        $this->assertEquals(10, $result); //resultado mockado
    }
}
?>