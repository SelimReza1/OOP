<?php
class Calculate{
    public $a =0;
    public $b = 0;
    public $result;

    public function getValue($a1 , $b1){
        $this->a = $a1;
        $this->b = $b1;
        return $this;  //return instance for get index class method chaining purpose
    }
    public function result(){
        $this->result = ($this->a * $this->b);
        return $this->result;  //return instance for get index class method chainging purpose
    }
}
?>