<?php 

    require_once("modelo/Produto.php");
    require_once("modelo/Computador.php");
    require_once("modelo/Balde.php");
    require_once("modelo/Livro.php");

    $computador = new Computador();
    $computador->setDescricao("Daten");
    $computador->setUnidadeMedida("Centimetros");
    $computador->setProcessador("Intel super hiper bom");
    $computador->setMemoria("SSD 1tb da HG");
    echo $computador->getDados();

    $balde = new Balde();
    $balde->setDescricao("Balde de plástico");
    $balde->setUnidadeMedida("Litros");
    $balde->setCapacidade("100");
    echo $balde->getDados();

    $livro = new Livro();
    $livro->setDescricao("Terror/Aventura");
    $livro->setUnidadeMedida("Gramas");
    $livro->setAutor("Michael Chriton");
    echo $livro->getDados();