<?php

require_once("Espaco.php");

    class Restaurante extends Espaco{
        private $tipoComida;
        
        public function getDadosRestaurante(){

        }
        /**
         * Get the value of tipoComida
         */
        public function getTipoComida()
        {
                return $this->tipoComida;
        }

        /**
         * Set the value of tipoComida
         */
        public function setTipoComida($tipoComida): self
        {
                $this->tipoComida = $tipoComida;

                return $this;
        }
    }