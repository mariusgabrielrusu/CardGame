<?php 

class Spell implements Card {

    protected $spellCost, $damage;

    public function __construct($spellCost, $damage){
        $this->spellCost = $spellCost;
        $this->damage = $damage;
    }

   public function getCost() {
        return $this->spellCost;
    }


    public function attack() {
        
    }

}

 ?>