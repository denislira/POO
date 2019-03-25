<?php

class Carro{
    //atributos
	private $modelo;
	private $motor;
	private $ano;

    //métodos
	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}
	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	} 
	public function setAno($ano){
		$this->ano = $ano;
	}


    //método exibir
    public function exibir(){
    	return array(
    		"modelo"=>$this->getModelo(),
    		"motor"=>$this->getMotor(),
    		"ano"=>$this->getAno()
 
    	   );
    }


}// <!--#class Carro-->

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.5");
$gol->setAno("2008");

print_r($gol->exibir());
echo "<br>";
var_dump($gol->exibir());
?>