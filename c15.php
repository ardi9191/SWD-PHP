<?php

class Flomaster{
	//proeperties
	private $boja = 'crna';
	private $dolzina = '15cm';
	private $sirina = '2cm';
	//methods
	public function setBoja($b){
		$this->boja = $b;
	}
	public function setDolzina(){
		$this->dolzina='10cm';
	}
	public function setSirina(){
		$this->sirina='5cm';
	}
	public function getBoja(){
		return $this->boja;
	}
	public function getDolzina(){
		return	$this->dolzina;
	}
	public function getSirina(){
		return	$this->sirina;
	}

}
//properti e bez zagradi koga povikuvas metod imas zagradi properti e $boja a metod e setboja
//objekti od tip flomaster
//instanci od klasa flomaster
//f1 i f2 se objekti

$f1 = new Flomaster;

$f2 = new Flomaster;

// $f2->boja = 'crvena';// -> za da moze da menjas samo za f2 ($f1->setBoja(primer) i $ f2->setBoja(primer) vaka povikuvas)
// $f2->dolzina = '25cm';
// $f2->sirina = '3cm';

$f1->setBoja('pembe');
$f2->setBoja('ciklama');
$f2->setDolzina();
$f2->setSirina();


echo $f1->getBoja();
echo $f2->getDolzina();
echo $f2->getSirina();

// print_r($f1);
// print_r($f2);

?>