<?php

class Person{
    public $userName;
    public $userId;
    public function __construct($name , $id)
    {
        $this->userName = $name;
        $this->userId = $id;
    }

    public  function display(){
        echo "User name is : {$this->userName} and user id is : {$this->userId}";

    }
}
class Admin extends Person{
    public $phone;
    public  function display(){
        echo "User name is : {$this->userName} and user id is : {$this->userId} and phone number is : {$this->phone}";

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

