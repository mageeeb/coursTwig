<?php

//class Text
//{
//    public static function withZero($chiffre){
//        if($chiffre < 10){
//            return '0'.$chiffre;
//        }else {
//            return $chiffre;
//        }
//    }
//}

class text{
    //*****creer un suffix '$'
    private static $suffix = '$';
    const SUFFIX='$';
//  ****appeler la fonction 'avecZero' mm si elle est en private

//    public static function publicZero($chiffre){
//      return  self::avecZero($chiffre);
//    }
//******function en private qui me permet de mettre un '0'quand le chiffre est < à 10
//******on rajoute 'self::$suffix'pour ajouter le suffix
    public static function avecZero($chiffre){
        if ($chiffre< 10){
            return '0'.$chiffre .self::SUFFIX;
        }else return $chiffre .self::SUFFIX;
    }
}