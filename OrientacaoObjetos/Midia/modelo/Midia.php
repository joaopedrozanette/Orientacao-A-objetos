<?php 

Class Midia {
    protected $descricao;
    protected $precoPago;
    
    public function getDados(){
        return "\nDescrição: " . $this->descricao . " | Preco Pago :" . $this->precoPago . " | Tipo: " .  $this->getTipo() . "\n";
    }

    public function getTipo(){
        return "Midia sem tipo";
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
     * Get the value of precoPago
     */
    public function getPrecoPago()
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago($precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
} 