<?php
// object iteration - foreach er vetore amra object take nieo oitar element golake pete pari iterator er maddome jvabe array value pai
spl_autoload_register(function($class_name){
    include $class_name.".php";
});

$person = new Person();
echo "Outside class<br>";
foreach ($person as $key => $value){  //outside class object iteration
    echo "$key=>$value"."<br>";

}
$person->iteratorInner();
?>