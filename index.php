<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Deadvicman");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("Ignire");

// Creation d'une instance de princesse
$princesse = new Princesse();

// Creation d'ne instance de sorcier
$sorcier = new Sorcier();


// je crée d'autres dragons
$dragon = new Dragon ();
$dragon = new Dragon ();
$dragon = new Dragon ();
$dragon = new Dragon ();

echo "Le nombre total d'instance de personnage est de : " . Personnage::getNumInstances() . "<br>";
echo "Le nombre total de Dragon créé est de  : " . Dragon::getNumDrag();


