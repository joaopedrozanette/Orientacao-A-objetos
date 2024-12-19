<?php 

    require_once("Cargo.php");

    Class Desenvolvedor extends Cargo {

        public function getSalario()
        {
            $salario = 1500 * 2.3;
            return $salario;
        }
        public function getCargo(){
            return "Desenvolvedor";
        }
    }