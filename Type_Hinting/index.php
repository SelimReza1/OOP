<?php
//type_hinting - function call korar somoy amra parameter hisebe bole dite pari kon typer data nie kaj korbo like arry object etc
spl_autoload_register(function ($class_name){
    include $class_name.".php";
}
);
$nums = array(
    array("Number one",10,10),
    array("Number two",20,20)
);
$cal = new Calculation();
$cal->getValue($nums); //$nums is array type

$ph = new Php();
$jv = new Java($ph); // $ph is object type
?>