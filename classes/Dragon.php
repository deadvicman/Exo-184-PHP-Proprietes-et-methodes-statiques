<?php

// La classe dragon hérite de ma classe personnage

class Dragon extends Personnage {

    public function __construct() {
        // Je redéfini le constructeur de cette classe, je souhaite que mes instances de dragon aient une propriété id
        // définie aléatoirement entre 1 et 99 999
        $this->setId(rand(1,99999));

        //Je souhaite également que les propriétés x et y soient défini aléatoirement pour chaque instance dragon
        // Je vais définir x et y aléatoirement entre 1 et 900
        $this->x = rand(1,900);
        $this->y = rand(1,900);
        self::$numDrag;

        $this->vie = 100;
    }

    // Je redéfini la méthode héritée setNom
    public function setNom($nom) {
        $this->nom = "Dragon ".$this->id;
    }
    /**
     * @return mixed
     */
    public static function getNumDrag()
    {
        return self::$numDrag;
    }

    /**
     * @param mixed $numDrag
     */
    public static function setNumDrag($numDrag): void
    {
        self::$numDrag = $numDrag;
    }

    // J'ajoute une méthode cracheFeu, pour le moment cette méthode ne fait rien du tout
    public function cracheFeu() {

    }
} 