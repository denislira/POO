<?php
abstract class Animal{

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Andar";
	}
}



class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	public function fakar(){
		return "Canta";
	}
	public function mover(){
		return "voa e ".parent::mover();
	}
}




$cao = new Cachorro();
echo $cao->falar()."<br>";
echo $cao->mover()."<br>";

echo "-----------<br>";

$gato = new Gato();
echo $gato->falar()."<br>";
echo $gato->mover()."<br>";

echo "-----------<br>";

$pass = new Passaro();
echo $pass->falar()."<br>";
echo $pass->mover()."<br>";
?>