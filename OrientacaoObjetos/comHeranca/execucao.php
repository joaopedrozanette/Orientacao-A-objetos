<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");

// Aluno
$aluno = new Aluno();  
$aluno->setMatricula(12345678);
$aluno->setNome("João");
$aluno->setIdade(16);
$aluno->setRg("0987654321"); 
echo $aluno;
echo $aluno->getNomeIdade() . "\n";


$professor = new Professor();  
$professor->setSalario(100000000000000);
$professor->setNome("Alexandre");
$professor->setIdade(18);
$professor->setRg("1234567890");
echo $professor;

