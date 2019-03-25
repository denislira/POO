<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Denis");
$cad->setEmail("denis@a.com");
$cad->setSenha("1234");

$cad->registrarVenda();
?>