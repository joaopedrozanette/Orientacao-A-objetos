<?php 

  class Carta{

    private  $numero;
    private  $nome;
    

  

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
  }

  $baralhoCartas= array();

  $cartas= array("A", "2", "3", "4", "5", "6", "7", "8", "9", "J", "Q", "K");
  $naipes= array("ouro", "copas", "espadas", "paus");

  for($i = 0;$i<7; $i++){

    $NumeroAleatorio = $cartas[array_rand($cartas)];
    $NomeAleatorio = $naipes[array_rand($naipes)] ; 
    $carta = new Carta;
    $carta->setNumero($NumeroAleatorio);
    $carta->setNome($NomeAleatorio);
    array_push($baralhoCartas, $carta);
    

  }

    
    
    
