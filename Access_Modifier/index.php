<?php
//public
//private        access modifier
//protected
// public accessable everywhere private only inside of class protected only parent class and child class
 class Person{
     private $university = "daffodil";
     protected $cgpa ="3";
    public $userName;
    public $userId;
    public function __construct($name , $id)
    {
        $this->userName = $name;
        $this->userId = $id;
    }

    public   function display(){
        echo "User name is : {$this->userName} and user id is : {$this->userId}";
        echo "<br>University name is :{$this->university}"; //private property has access inside of class
    }
}
class Admin extends Person{
    public $phone;
    public  function display(){
        echo "User name is : {$this->userName} and user id is : {$this->userId} and phone number is : {$this->phone}";
        echo "<br> Cgpa : {$this->cgpa}"; //protected property has access in parent and chlid class
    }

}
$name = "selim";
$id = "1212";
$personOne = new Person($name , $id);
echo "<br>";
$personOne->display();
echo "<br>";
$name = "sumon";
$id = "1122";
$admin = new Admin($name , $id);
$admin->phone = "0193848439";
$admin->display();
?>

