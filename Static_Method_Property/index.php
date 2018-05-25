<?php

class Person{
    public $userName;
    public $userId;
    const NAME = "Reza"; // short form const uses for constant value and name have to be capital of constructor no need $ sign
    public static $age="30";
    public function __construct($name , $id)
    {
        $this->userName = $name;
        $this->userId = $id;

        echo "User name is : {$this->userName} and user id is : {$this->userId}";
    }

    public static function display(){
        echo "Another name is  : ".Person::NAME; //call system is class name :: constant name
        echo "<br>Age is : ".self::$age; //static property have to call by self keyword and scope
    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this->userName);
        unset($this->userId);
    }

}

$personOne = new Person("Selim" , "1212");
echo "<br>";
Person::display(); //static method have to call ClassName::(scope)method name

?>

