<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Calculadora.php'; 

class CalculadoraTest extends TestCase {
    public function testAdd() {
        $calc = new Calculadora(); 
        $this->assertEquals(5, $calc->add(0, -5)); 
    }

    public function testException() {
        $this->expectException(InvalidArgumentException::class); // Espera uma InvalidArgumentException
        $calc = new Calculadora();
        $calc->add(-1, 5); // muda para o que eu espero 
    }
}



?>
