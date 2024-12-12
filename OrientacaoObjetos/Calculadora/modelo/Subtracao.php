<?php 

require_once("Calculadora.php");

Class Subtracao extends Calculadora{
    public function calcular()
    {
        $resultado = $this->numA - $this->numB;
        echo "Resultado: " . $resultado . "\n";
    }
}