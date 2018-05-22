<?php
class Person{
    public $name;
    public $age;

    public function personName(){
    echo "Name of person is: ".$this->name."<br/>";
    }

    public function personAge($age){
    echo "age of person is :".$this->age=$age."<br/>";
    }
}
$personOne = new Person();
$personOne->name="Sumon";
$personOne->personName();

$personOne->personAge("19");
