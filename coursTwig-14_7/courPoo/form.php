<?php

//class Form{
//
//
//    public function __construct($data=array())
//    {
//        return $this->data=$data;
//    }
//    public function getValue($index){
//        return isset($this->data[$index])?$this->data[$index]:null;
//    }
//
//    public function input($name){
//        return '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">';
//    }
//    public function submit(){
//        return '<button type="submit">Envoyer</button>';
//    }
//}

class Form{


    public function __construct($data=array())
    {
        $this->data=$data;
    }
    public function getValue($index){
        return isset($this->data[$index])? $this->data[$index]:null;
    }

    public function input($name){
        return '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">';
}
    public function submit(){
        return '<button type="submit">Envoyer</button>';
    }
}