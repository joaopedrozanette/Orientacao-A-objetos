<?php

require_once("modelo/Cachorro.php");
require_once("modelo/Animal.php");
require_once("modelo/Gato.php");

$cachorro = new Cachorro();
$cachorro->setNome("Mauricio");
$cachorro->setRaca("Vira-Lata");
echo $cachorro->getDados() . "\n";
$cachorro->latir();

$cachorro2 = new Cachorro;
$cachorro2->setNome("Moana");
$cachorro2->setRaca("York shire");
echo $cachorro2->getDados() . "\n";
$cachorro2->latir();


$gato = new Gato();
$gato->setNome("Tino");
$gato->setRaca("Vira-lata");
echo $gato->getDados() . "\n";
$gato->miar();

$gato2 = new Gato();
$gato2->setNome("Lindinha");
$gato2->setRaca("Vira-lata");
echo $gato2->getDados( ) . "\n";
$gato2->miar();
