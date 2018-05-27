<?php
// normally kono ekta object k copy kore arekta obj toiri koirle value replace hoie jay seta solve korar jonno
// clone keyword use kora hoy
spl_autoload_register(function ($class_name){
  include "$class_name".".php";
});

$st1 = new Student();
$st1->setName("Montu");
$st1->setAge("19");
$st2 = clone $st1;  // object copy by refrences
$st2->setName("Adu");
$st2->setAge("59");
echo $st1->getName()."<br>";
echo $st1->getAge()."<br>";

echo $st2->getName()."<br>";
echo $st2->getAge()."<br>";

?>