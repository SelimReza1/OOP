<?php

class Person{
    public $userName;
    public $userId;
    const NAME = "Reza"; // short form const uses for constant value and name have to be capital of constructor no need $ sign
    public function __construct($name , $id)
    {
        $this->userName = $name;
        $this->userId = $id;

        echo "User name is : {$this->userName} and user id is : {$this->userId}";
    }

    public function display(){
        echo "Another name is  : ".Person::NAME; //call system is class name :: constant name
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
$personOne->display();

?>

