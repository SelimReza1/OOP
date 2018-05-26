<?php
class Java{
    public $value;
    public function __construct(Php $val) //Php is class name here
    {
        $this->value = $val;
        $this->value->laravel();
        $this->value->wordpress();
    }
}
?>