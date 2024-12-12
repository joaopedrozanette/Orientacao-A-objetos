<?php 

require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$cd = new CD();
$cd->setNome("RHCP");
$cd->setPreco(5.50);
echo $cd . "\n  " . $cd->getTipo(). "\n";

$dvd = new DVD();
$dvd->setNome("Poderoso Chefão");
$dvd->setPreco(75.00);
echo $dvd . "\n " . $dvd->getTipo(). "\n";