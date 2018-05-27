<?php
class Php{
    public static function framework(){
        echo static::getClass();  // here have used static inliue of self  cause by static we also access super class getClass method
    }
    public static function getClass(){
         return __CLASS__;
    }
}

?>