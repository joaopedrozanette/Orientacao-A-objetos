<?php 

    require_once("Mago.php");

 class Curandeiro extends Mago{

    private $forcaDeCura;

    
    public function lancaPoder(){
       $lancaPoder = "O mago " . $this->nome . ", do tipo curandeiro, possui força de  " . $this->forcaDeCura . " e lançou o poder " . $this->poder->getDescricao() . " com força total de " . $this->poder->getForcaTotal($this->forcaDeCura);
       return $lancaPoder;
    }
    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura()
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura($forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
 }