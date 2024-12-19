<?php 

require_once("Veiculo.php");

Class Onibus extends Veiculo{

    public function getValorViajem()
    {
        $valorViajem = $this->valorAluguel + ($this->kmRodados * 4.2);
        return $valorViajem;
    }
    public function getTipo(){
        return "Onibus";
    }
}