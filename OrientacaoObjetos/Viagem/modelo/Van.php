<?php 

require_once("Veiculo.php");

Class Van extends Veiculo{

    public function getValorViajem()
    {
        $valorViajem = $this->valorAluguel + ($this->kmRodados * 2.1);
        return $valorViajem;
    }
    public function getTipo(){
        return "Van";
    }
}