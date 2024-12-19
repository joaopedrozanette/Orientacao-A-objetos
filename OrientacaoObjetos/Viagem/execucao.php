<?php
require_once("modelo/Van.php");
require_once("modelo/Carro.php");
require_once("modelo/MicroOnibus.php");
require_once("modelo/Onibus.php");

$opcao = 0;
do {
    echo "\n-----------CALCULADORA DE VIAJEM-----------\n";
    echo "1- Carro\n";
    echo "2- Van\n";
    echo "3- Micro-Onibus\n";
    echo "4- Onibus\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            echo "Inserindo....\n";
            break;
        case 2:
            echo "Listando....\n";
            break;
        case 3:
            echo "Listando....\n";
            break;
        case 4:
            echo "Listando....\n";
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
