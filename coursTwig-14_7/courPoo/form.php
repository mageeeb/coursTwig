<?php

//class Form
//{
//    private $data;
//    public $surround = 'p';
//    public function __construct($data= array())
//    {
//        $this->data = $data;
//    }
//
//    private function surround($html){
//           return "<{$this->surround}> {$html} </{$this->surround}";
//    }
//    private function getValue($index){
//        return isset($this->data[$index])? $this->data[$index] : null ;
//    }
//    public function input($name){
//        return $this->surround('<input type="text" name="'.$name.'"value="'.$this->getValue($name).'">');
//    }
//
//    public function submit(){
//       return $this->surround('<button type="submit">Envoyer</button>');
//    }
//}

/**
 * class form permet de generer un formulaire rapidement et simplement
 */
//class Form
//{
//    /**
//     * @var array|mixed donnée utilisé par le formulaire
//     */
//    private $data;
//
//    /**
//     * @param $data donnée le construteur qui est utilisé par le formulaire
//     */
//    public function __construct($data = array())
//    {
//        $this->data = $data;
//    }
//
//    /**
//     * @param $index
//     * @return mixed|null on veux que ça enregistrer le nom roger directement
//     */
//    private function getValue($index){
//        //la condition se fera par ternaire
//        return isset($this->data[$index]) ? $this->data[$index]:null ;
//
//    }
//
//    public function input($name){
//       return '<input type="text"  name="'.$name.'" value="'.$this->getValue($name).'">';
//    }
//    public function submit(){
//        return '<button type="submit">Envoyer</button>';
//    }
//}

//class Form
//
//{
//    private $data;
//    public function __construct($data = array())
//    {
//        $this->data =$data;
//    }
//    private function getValue($index){
//        return isset($this->data[$index]) ? $this->data[$index] : null ;
//    }
//    public function input($name){
//       return'<input type="text" name="'.$name. '" value="'.$this->getValue($name).'">';
//    }
//    public function submit(){
//        return '<button type="submit">Envoyer</button>';
//    }
//}

class Form
{

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function getValue($index){
        return isset($this->data [$index]) ? $this->data[$index]: null ;
    }

    public function input($name){
        return '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">';
    }

    public function submit(){
        return '<button type="submit">Envoyer</button>';
    }
}