<?php

class Documentos{

   private $numero;

   public function getNumero()
   {
   	 return $this->numero;
   }

   public function setNumero($n)
   {
   	 $this->numero = $n;
   }
}


/**
 * classe 
 */
class CPF extends Documentos
{
	 public function validar():bool
	 {
	 	$numeroCPF = $this->getNumero();
	 	//validar CPF
	 	return true;
	 }
	

}

$doc = new CPF();
$doc->setNumero("12333454467");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
?>