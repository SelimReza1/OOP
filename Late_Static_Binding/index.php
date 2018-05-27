<?php
//super class theke sub class er static method property access korar way holo Late_Static_binding
spl_autoload_register(function ($class_name){
 include $class_name.".php";
}
);
class PhpChild extends Php{
    public static function getClass(){
         return __CLASS__;
    }
}


echo PhpChild::framework()."<br>";
echo Php::framework();
?>