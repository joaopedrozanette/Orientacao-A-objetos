<?php 

 require_once("modelo/Poder.php");
 require_once("modelo/Mago.php");
 require_once("modelo/Combatente.php");
 require_once("modelo/Curandeiro.php");

 $p1 = new Poder("Recupera enegia", 0);
 $p2 = new Poder("Recupera enegia super", 20);
 $p3 = new Poder("Golpe normal", 0);
 $p4 = new Poder("Golpe especial", 15);

 $m1 = new Curandeiro();
 $m1->setNome("DavaJones");
 $m1->setPoder($p2);
 $m1->setForcaDeCura(100);

 $m2 = new Combatente();
 $m2->setNome("GameplayRj");
 $m2->setPoder($p4);
 $m2->setForcaDeAtaque(200);
 

 echo $m1->lancaPoder();
 
