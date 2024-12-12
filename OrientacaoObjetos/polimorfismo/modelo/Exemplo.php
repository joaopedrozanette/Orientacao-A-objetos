<?php 

Class Exemplo{

    
    

    public function escreva($v = "", $w = ""){
        if($v == "" and $w == ""){
            echo "Valor: " . "sem valor" . "\n";
        } elseif($w == ""){
            echo "Valor: " . $v . "\n";
        }else
        echo "Valor: " . $v . " " . $w . "\n";
    }

}