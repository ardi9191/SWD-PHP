<?php

class Studenti{
	//proeperties
	private $ime = 'tosho';
	private $prezime = 'malerot';
	//methods
	public function setIme($i){
		$this->ime = $i;
	}

	public function setPrezime($i){
		$this->prezime=$i;
	}

	public function getIme(){
		return $this->ime;
	}

	public function getPrezime(){
		return	$this->prezime;
	}
	
}

$s1 = new studenti;
$s1->setIme('Ardi');
$s1->setPrezime('Demirovikj');
print_r($s1);

$s2 = new studenti;
print_r($s2);



?>