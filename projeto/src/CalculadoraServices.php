<?php

class CalculadoraService {
    private $Calculadora;

    public function __construct(Calculadora $Calculadora) {
        $this->Calculadora = $Calculadora;
    }

    public function calculateSum($a, $b) {
        return $this->Calculadora->add($a, $b);
    }
}
?>