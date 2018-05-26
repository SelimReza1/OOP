<?php
// inside class object iteration
class Person{
    public $name = "Selim";
    public $age = "21";

    private $email = "selimreza@gmail.com";
    protected $password = "121212";

    //iterate private protected also with public property
public function iteratorInner(){
    echo "<br>inside class<br>";
    foreach ($this as $key=>$value){
        echo "<pre>";
        echo "$key=>$value<br>";
        echo "<pre>";
    }
}
}
?>