<?php

require_once("Calculadora.php");

Class Resto extends Calculadora{
    public function calcular()
    {
        $resultado = $this->numA % $this->numB;
        echo "Resultado: " . $resultado . "\n";
    }
}