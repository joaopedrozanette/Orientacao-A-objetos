<?php 

require_once("Espaco.php");

class PontoTuristico extends Espaco{
    private $duracaoDaVisita;

    
    public function getDadosPontoTuristico(){


    }
    /**
     * Get the value of duracaoDaVisita
     */
    public function getDuracaoDaVisita()
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of duracaoDaVisita
     */
    public function setDuracaoDaVisita($duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}