<?php

require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

$opcao = 0;
do {
    echo "\n-----------CALCULADORA DE SALARIO-----------\n";
    echo "1- Gerente\n";
    echo "2- Desenvolvedor\n";
    echo "3- Estagiario\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            $gerente = new Gerente();
            $gerente->setNome(readline("Nome do Funcionario: "));
            echo $gerente->getSaida();
            break;
        case 2:
            $desenvolvedor = new Desenvolvedor();
            $desenvolvedor->setNome(readline("Nome do Funcionario: "));
            echo $desenvolvedor->getSaida();
            break;
        case 3:
            $estagiario = new Estagiario();
            $estagiario->setNome(readline("Nome do Funcionario: "));
            echo $estagiario->getSaida();echo "Listando....\n";
            break;    
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
