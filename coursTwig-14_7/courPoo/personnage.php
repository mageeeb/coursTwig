<?php


/**
 *
 */
class Personnage
{
  protected  $vie = 80;
    private  $atk =20 ;
   private $nom;

    /**
     * @param int $vie
     * @param int $atk
     * @param $nom
     */
    public function __construct( $nom)
    {

        $this->nom = $nom;
    }
/*-------------------------------------------getter/setter-----------------------------------------------*/
    /**
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @return int
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return "Dieureudieufé". " ". $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
/*--------------------------------------------------------------------------------------------------------*/
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
    //pour empecher que la vie soit négatif à 0
    public function empecher_negatif(){
        if ($this->vie <0){
            $this->vie = 0;
        }
    }
//function pour la cible du personnage
//si $this est l'attaquant et $cible le Defenseur
    public function attaque($cible){
        //$cible->vie = 20;
        //var_dump($cible);
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }

}