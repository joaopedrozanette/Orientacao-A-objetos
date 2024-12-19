<?php

abstract class Veiculo
{
    protected $valorAluguel;
    protected $kmRodados;

    public abstract function getValorViajem();
    public abstract function getTipo();

    public function __toString()
    {
        return "O veículo" . $this->getTipo() . ", foi alugado por R$" . $this->valorAluguel . " , rodou " . $this->kmRodados . " quilômetros com custo total de R$" . $this->getValorViajem();
    }

    /**
     * Get the value of valorAluguel
     */
    public function getValorAluguel()
    {
        return $this->valorAluguel;
    }

    /**
     * Set the value of valorAluguel
     */
    public function setValorAluguel($valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    /**
     * Get the value of kmRodados
     */
    public function getKmRodados()
    {
        return $this->kmRodados;
    }

    /**
     * Set the value of kmRodados
     */
    public function setKmRodados($kmRodados): self
    {
        $this->kmRodados = $kmRodados;

        return $this;
    }
}
