<?php 
require_once("Veiculo.php");
Class CarroPasseio extends Veiculo{
    private $qtdPassageiros;

    public function getDados(){
        $dados = "\nModelo: " . $this->modelo  . "\n";
        $dados .= "\nVelocidade Maxima: " . $this->velocidadeMax  . "\n";
        $dados .= "\ncor: " . $this->cor  . "\n";
        $dados .= "\n:Quantidade de Passageiros " . $this->qtdPassageiros . "\n";
        return $dados;
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
}