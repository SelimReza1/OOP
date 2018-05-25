<?php
abstract class Person{
    public $name;
    public $age;
    public function details(){
        echo $this->name ." is ".$this->age ." years old<br>";
    }
    abstract public function versity();
}
class Student extends Person{

    public function describe(){
        return parent::details(). " And I am a sleeping guy<br>";
    }
    public function versity()
    {
        // TODO: Implement versity() method.
        echo "My versity name is daffodil<br>";
    }
}
$std = new Student();
$std->name = "Sam";
$std->age = "30";
echo $std->describe();
$std->versity();
?>