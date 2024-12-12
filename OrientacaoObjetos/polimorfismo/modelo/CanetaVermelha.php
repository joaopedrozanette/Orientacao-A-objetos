<?php 
    require_once("CanetaAzul.php");
Class CanetaVermelha extends CanetaAzul{
        public function escrever()
        {
            echo "Escrevendo com a caneta vermelha.\n";
        }
        public function escreverEspec(){
            $this->escrever();
        }
        public function escreverPai(){
            parent::escrever();
        }
}