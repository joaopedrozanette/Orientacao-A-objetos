<?php 

    require_once("modelo/Midia.php");
    require_once("modelo/Cd.php");
    require_once("modelo/Dvd.php");

    $midias = array();

    for($i=0; $i < 3; $i++){
    $cd = new Cd();
    $cd->setDescricao(readline("Descricão: "));
    $cd->setPrecoPago(readline("Preço Pago: "));
    echo $cd->getDados();
    array_push($midias, $cd);
    }

    for($i=0; $i < 2; $i++){
    $dvd = new Dvd();
    $dvd->setDescricao(readline("Descricão: "));
    $dvd->setPrecoPago(readline("Preço Pago: "));
    echo $dvd->getDados();
    array_push($midias, $dvd);

    }
    
    foreach($midias as $m){
        echo $m->getDados();
    }

        
