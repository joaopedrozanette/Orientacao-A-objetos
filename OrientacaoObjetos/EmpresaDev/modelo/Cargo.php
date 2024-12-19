<?php 

    abstract Class Cargo{
        protected $nome;
        

        public abstract function getSalario();
        public abstract function getCargo();
        Public function SalarioRs(){
            $salarioFormatado = number_format($this->getSalario(), 2, ',', '');
            return $salarioFormatado;
        }

        public function getSaida(){
            $saida = "\nO funcionário ". $this->nome . ", de cargo de " . $this->getCargo() . " ,possui salário de R$ " . $this->SalarioRs() . "\n";

            return $saida;
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