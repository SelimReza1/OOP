<?php

class Person{
    public $name;
    public $age;

//    public function __construct()
//    {
//        echo "Constructor";
//    }

public function __construct($name , $age)
{
    $this->name = $name;
    $this->age = $age;
}

public function personDetails(){
    echo "Name of person {$this->name} and age of person {$this->age}";
}

}

$personOne = new Person("Selim" , "21");
$personOne->personDetails();
?>