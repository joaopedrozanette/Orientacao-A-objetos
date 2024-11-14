<?php

require_once("modelo/Restaurante.php");
require_once("modelo/PontoTuristico.php");
require_once("modelo/Hotel.php");


$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Cadastrar Espaço\n";
    echo "2- Excluir Espaço\n";
    echo "3- Listar Espaços\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            
            break;
        case 1:
            echo "Inserindo....\n";
            break;
        case 2:
            echo "Listando....\n";
            break;
        case 3  :
            echo "Listando....\n";
            break;    
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
