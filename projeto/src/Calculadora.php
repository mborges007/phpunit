<?php

class Calculadora {
    public function add($a, $b) {
        if ($a < 0 || $b < 0) { // Verifica se algum dos números é negativo
            throw new InvalidArgumentException("Os números devem ser não negativos.");
        }
        return $a + $b;
    }
}
?>
