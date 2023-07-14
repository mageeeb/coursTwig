<?php


class Personnage
{
    public $vie ;
    public $atk ;
    public $nom;

    /**
     * @param int $vie
     * @param int $atk
     * @param $nom
     */
    public function __construct(int $vie, int $atk, $nom)
    {
        $this->vie = $vie;
        $this->atk = $atk;
        $this->nom = $nom;
    }


    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie =100;
        }else{
            $this->vie = $this->vie + $vie;
            //on peut aussi l'ecrire de cette façon
            $this->vie += $vie;
        }
    }
//function pour la mort du personnage
    public function mort(){
        return $this->vie <= 0;
    }
//function pour la cible du personnage
//si $this est l'attaquant et $cible le Defenseur
    public function attaque($cible){
        //$cible->vie = 20;
        //var_dump($cible);
        $cible->vie -= $this->atk;
    }

}