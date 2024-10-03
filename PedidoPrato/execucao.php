<?php 

    require_once("modelo/Prato.php");
    require_once("modelo/Pedido.php");


$prato1 = new Prato;
$prato1->setNumero(1);
$prato1->setNome("Camarão a Milanesa");
$prato1->setValor(110.00);

$prato2 = new Prato;
$prato2->setNumero(2);
$prato2->setNome("Pizza Margherita");
$prato2->setValor(80.00);

$prato3 = new Prato;
$prato3->setNumero(3);
$prato3->setNome("Macarrão à Carbonara");
$prato3->setValor(60.00);

$prato4 = new Prato;
$prato4->setNumero(4);
$prato4->setNome("Bife à Parmegiana");
$prato4->setValor(75.00);

$prato5 = new Prato;
$prato5->setNumero(5);
$prato5->setNome("Risoto ao Funghi");
$prato5->setValor(70.00);

$pratos = array($prato1, $prato2, $prato3, $prato4, $prato5);

$pedidos = array();


$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Cadastrar Pedido\n";
    echo "2- Cancelar\n";
    echo "3- Listar\n";
    echo "4- Total de Vendas\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            $pedido = new Pedido;
            $pedido->setNomeCliente(readline("Nome do Cliente: "));
            $pedido->setNomeGarcom(readline("Nome do Garçom: "));
            
            foreach($pratos as $p){
                echo "\n" . $p->getNumero() . " - " . $p->getNome() . " | R$ " . $p->getValor() . "\n"; 
            }
        
            $escolha = readline("Escolha o Prato: ");

            if($escolha > 5 or $escolha<1){

                echo "\nEssa opção de prato não existe!\n";

            }

           
            
            
            foreach($pratos as $p){
                if($p->getNumero() == $escolha){

                    $pedido->setPrato($p);

                    break;

                }
                
            }
        
                
            array_push($pedidos, $pedido);

            break;
        case 2:
             foreach ($pedidos as $p) {
                echo "\n" . $p->getPrato()->getNumero() . " - " . $p->getNomeCliente() . " | " . $p->getNomeGarcom() . " |  " . $p->getPrato()->getNome() . "\n"; 
                
             }
             
             $excluir = readline("Qual Prato Deseja excluir?: ");
             $excluir = $excluir - 1;

             $pedidos = array_splice($pedidos, $excluir, 1 );
             
            break;
        case 3:
            foreach ($pedidos as $p) {
                echo "\nO cliente " . $p->getNomeCliente() . ", foi atendido pelo garçom " . $p->getNomeGarcom() . ", pediu um prato de " . $p->getPrato()->getNome() . " no valor  de R$ " . $p->getPrato()->getValor() . "\n";
            }
            break;
        case 4:
            $total = 0;
            foreach ($pedidos as $p) {
                $total = $total + $p->getPrato()->getValor();
            }

            echo"O total dos pratos é R$" . $total ; 

            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);