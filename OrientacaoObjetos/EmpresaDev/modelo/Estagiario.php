<?php 

    require_once("Cargo.php");

    Class Estagiario extends Cargo {

        public function getSalario()
        {
            $salario = 1500 * 0.8;
            return $salario;
        }
        public function getCargo(){
            return "Estagiario";
        }
    }