<?php 

    require_once("Cargo.php");

    Class Gerente extends Cargo {

        public function getSalario()
        {
            $salario = 1500 * 4.5;
            return $salario;
        }
        public function getCargo(){
            return "Gerente";
        }
    }