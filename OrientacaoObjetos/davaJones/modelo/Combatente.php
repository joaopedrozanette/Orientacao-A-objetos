<?php 

 require_once("Mago.php");


class Combatente extends Mago{

    private $forcaDeAtaque;
    

    public function lancaPoder(){

    }

    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque()
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque($forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}