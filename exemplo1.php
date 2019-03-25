<?php

class Pessoa{

	public $nome; //atributo

	public function falar(){ //método - função dentro da classe
		return " O meu nome é ".$this->nome;
	}
}

$denis = new Pessoa();
$denis->nome = "Denis Andre";
echo $denis->falar();

?>