<?php

class Person{
    public $userName;
    public $userId;

    public function __construct($name , $id)
    {
        $this->userName = $name;
        $this->userId = $id;

        echo "User name is : {$this->userName} and user id is : {$this->userId}";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this->userName);
        unset($this->userId);
    }

}

$personOne = new Person("Selim" , "1212");
?>

