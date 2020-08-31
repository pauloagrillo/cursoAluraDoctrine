<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use \Alura\Doctrine\Helper\EntityManagerFactory;

require_once 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();

var_dump($entityManager->getConnection());

$teste2= 'balbaisdjas';

$teste = new Telefone;

$teste->setAluno($teste2);

$teste->getId();


