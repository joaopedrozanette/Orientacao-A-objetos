<?php 
require_once("Veiculo.php");

Class Onibus extends Veiculo{
    private $qtdPassageiros;
    private $pesoMax;

    public function getDados(){
        $dados = "\nModelo: " . $this->modelo  . "\n";
        $dados .= "\nVelocidade Maxima: " . $this->velocidadeMax  . "\n";
        $dados .= "\ncor: " . $this->cor  . "\n";
        $dados .= "\n:Quantidade de Passageiros " . $this->qtdPassageiros . "\n";
        $dados .= "\nPeso Maximo " . $this->pesoMax  . "\n";
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

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}