<?php 

class Creature extends card {
    public function damage(){
        $damage = rand(1,9);
        return $damage;
    }
    
        public function  hp() {
       return $hp=rand(1,9);
    }
}


class pirate extends creature {
    $pirateName="Pirate BlackBeard";
}

class basic extends creature {
    $basicName="Basic rabbit";
}

class murloc extends creature {
    $murlocName="Murloc King";
}

class beast extends creature {
    $beastName="Beast Ape";
}

