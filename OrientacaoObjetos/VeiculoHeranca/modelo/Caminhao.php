<?php 
require_once("Veiculo.php");
Class Caminhao extends Veiculo {
    private $qtdCarga;
    private $altura;

    
    public function getDados(){
        $dados = "\nModelo: " . $this->modelo  . "\n";
        $dados .= "\nVelocidade Maxima: " . $this->velocidadeMax  . "\n";
        $dados .= "\ncor: " . $this->cor  . "\n";
        $dados .= "\n:Quantidade de Carga " . $this->qtdCarga . "\n";
        $dados .= "\nAltura " . $this->altura  . "\n";
        return $dados;
    }
    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}