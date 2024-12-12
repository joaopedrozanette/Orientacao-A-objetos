<?php

class Produto
{

    protected $descricao;
    protected $UnidadeMedida;

    public function getDados()
    {

        $dados = "Descricao: " . $this->descricao . " | Unidade de Medida: " . $this->UnidadeMedida;

        return $dados;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of UnidadeMedida
     */
    public function getUnidadeMedida()
    {
        return $this->UnidadeMedida;
    }

    /**
     * Set the value of UnidadeMedida
     */
    public function setUnidadeMedida($UnidadeMedida): self
    {
        $this->UnidadeMedida = $UnidadeMedida;

        return $this;
    }
}
