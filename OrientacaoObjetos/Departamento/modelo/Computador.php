<?php

require_once("Produto.php");
class Computador extends Produto
{
    private $memoria;
    private $processador;

    public function getDados() {

         $dados = parent::getDados() . " | Memória: " . $this->memoria . " | Processador: " . $this->processador . "\n\n";

        return $dados;
    }
    /**
     * Get the value of memoria
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }

    /**
     * Get the value of processador
     */
    public function getProcessador()
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }
}
