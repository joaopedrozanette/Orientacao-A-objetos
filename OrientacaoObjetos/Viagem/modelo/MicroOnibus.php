<?php 

require_once("Veiculo.php");

Class MicroOnibus extends Veiculo{

    public function getValorViajem()
    {
        $valorViajem = $this->valorAluguel + ($this->kmRodados * 2.75);
        return $valorViajem;
    }
    public function getTipo(){
        return "Micro Onibus";
    }
}