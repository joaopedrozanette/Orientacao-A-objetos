<?php 

    require_once("Espaco.php");

class Hotel extends Espaco{

    private $numeroEstrela;
    private $cafeIncluso;


    public function getDadosHotel(){
        
    }

    

    /**
     * Get the value of numeroEstrela
     */
    public function getNumeroEstrela()
    {
        return $this->numeroEstrela;
    }

    /**
     * Set the value of numeroEstrela
     */
    public function setNumeroEstrela($numeroEstrela): self
    {
        $this->numeroEstrela = $numeroEstrela;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function getCafeIncluso()
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso($cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}