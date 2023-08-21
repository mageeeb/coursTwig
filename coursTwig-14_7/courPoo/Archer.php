<?php

class Archer extends Personnage
{
    protected $vie = 40;




    public function attaque($cible){
      //ici l'archer atk 2*
        //$cible->vie -= 2* $this->atk;
        //autre methode, l'archer atk une * et...
        $cible->vie -= $this->atk;
        // le parent fait le reste en l'appelant
        parent::attaque($cible);
        $cible->empecher_negatif();
    }
}