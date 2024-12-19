<?php 

require_once("Veiculo.php");

Class Carro extends Veiculo{

    public function getValorViajem()
    {
        $valorViajem = $this->valorAluguel + ($this->kmRodados * 1.5);
        return $valorViajem;
    }
    public function getTipo(){
        return "Carro";
    }
}