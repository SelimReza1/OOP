<?php
spl_autoload_register(function ($class_name){
   include $class_name.".php";
});

$std =new Student();
$std->info()->result_info();

$cal = new Calculate();
echo "<br>Result is : ".$cal->getValue(3,5)->result(); //method chaining call multiple method by one time
?>