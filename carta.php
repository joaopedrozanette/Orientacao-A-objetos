<?php 

  class Carta{

    private  $numero;
    private  $nome;
    

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
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

$baralhoCartas = array();

$cartas = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "J", "Q", "K");
$naipes = array("ouro", "copas", "espadas", "paus");

for ($i = 0; $i < 7; $i++) {

    $NumeroAleatorio = $cartas[array_rand($cartas)];
    $NomeAleatorio = $naipes[array_rand($naipes)];
    $carta = new Carta;
    $carta->setNumero($NumeroAleatorio);
    $carta->setNome($NomeAleatorio);
    array_push($baralhoCartas, $carta);
}
$cartaSorteada = array();
$cartaSorteada = $baralhoCartas[array_rand($baralhoCartas)];

echo "Jogo de adivinhação de Cartas: tente acertar qual carta foi sorteada.\n";

$opcao = 1;

echo "\nCartas disponiveis, acerte qual é a carta sorteada: \n\n";

foreach ($baralhoCartas as $bc) {

    echo "Opcão: " . $opcao  . " - " . $bc->getNumero() . " de " . $bc->getNome() . " \n";
    $opcao++;
}

    $pontos = 100;

do {
    
    $escolha = readline("Escolha uma opção(número de 1 a 7) ou digite 0 para desistir: "); 

    if ($escolha == "0") {
        echo "\nDESISTENTE! A carta era " . $cartaSorteada->getNumero() . " de " . $cartaSorteada->getNome() . ".\n";
        break;}

   
    $escolha = $escolha - 1;

    if (isset($baralhoCartas[$escolha])) {
        $cartaEscolhida = $baralhoCartas[$escolha];
        
        if ($cartaEscolhida->getNumero() === $cartaSorteada->getNumero() and 
            $cartaEscolhida->getNome() === $cartaSorteada->getNome()) {
            echo "MAX WIN! Você acertou a carta escolhida: " . $cartaSorteada->getNumero() . " de " . $cartaSorteada->getNome() . "\n";
            echo "Pontuação: " . $pontos . "\n";
            break;
        } else {
            $pontos = $pontos - 10;
            echo "Errooooou! TENTA DE NOVO.\n";
        }
    } else {
        echo "Escolha inválida.\n";
    }

} while (true);


    
    
    
