<?php

class profesori{
	//properties
	private $maticenbroj = '123321';
	private $predmet = 'php';
	//methods
	public function setMaticenbroj($m){
		$this->maticenbroj = $m;
	}
	public function setPredmet($m){
		$this->predmet =$m;
	}
	public function getMaticenbroj(){
		return $this->maticenbroj;
	}
	public function getPredmet(){
		return $this->predmet;
	}
}

$p1 = new profesori;
$p1->setMaticenbroj('321123');
$p1->setPredmet('matematika');
print_r($p1);

$p2 = new profesori;
print_r($p2);



?>